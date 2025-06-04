<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Course;

class CartController extends Controller{
    // Hiển thị giỏ hàng
    public function show()
    {
        $cart = Cart::where('user_id', auth()->id())->with('items.course')->first();

        return view('cart', compact('cart'));
    }

    // Thêm khóa học vào giỏ hàng
    public function add(Request $request){
    $validatedData = $request->validate([
        'course_id' => 'required|integer|exists:courses,id',
    ]);

    $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

    $cartItem = CartItem::where('cart_id', $cart->id)
                        ->where('course_id', $validatedData['course_id'])
                        ->first();

    if ($cartItem) {
        return redirect()->back()->with('error', 'Course is already in your cart!');
    }

    CartItem::create([
        'cart_id' => $cart->id,
        'course_id' => $validatedData['course_id'],
    ]);

    return redirect()->back()->with('success', 'Course added to cart successfully!');
}
    public function remove(Request $request, $course_id) {
        $cart = Cart::where('user_id', auth()->id())->first();

        if ($cart) {
        // Tìm và xóa mục giỏ hàng dựa trên cart_id và course_id
        $deleted = CartItem::where('cart_id', $cart->id)
                           ->where('course_id', $course_id)
                           ->delete();

            if ($deleted) {
                return redirect()->route('cart.show')->with('success', 'Course removed from cart successfully!');
            }
        }

        return redirect()->route('cart.show')->with('error', 'Course not found in cart!');
    }
    public function checkout(Request $request)
    {
        $cart = Cart::where('user_id', auth()->id())->with('items.course')->first();

        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.show')->with('error', 'Your cart is empty!');
        }
        // Tính tổng số tiền trong giỏ hàng
        $totalPrice = $cart->items->sum(function($item) {
            return $item->course->price;
        });
        $user = auth()->user();
        if ($user->balance < $totalPrice) {
            return redirect()->route('cart.show')->with('error', 'Insufficient balance!');
        }
        $user->balance -= $totalPrice;
        $user->save();

        //add to courses_of_user
        foreach ($cart->items as $item) {
            $user->courses()->attach($item->course_id);
        }

        
        $cart->delete();

        return redirect()->route('homepage')->with('success', 'Checkout successful!');
    }
    public function buynow(Request $request, $course_id)
    {
        $course = Course::findOrFail($course_id);
        $user = auth()->user();
        if ($user->balance < $course->price) {
            return redirect()->back()->with('error', 'Insufficient balance!');
        }
        // trừ tiền
        $user->balance -= $course->price;
        $user->save();
        // thêm khóa vào  user
        $user->courses()->syncWithoutDetaching($course_id);

        return redirect()->route('homepage')->with('success', 'Course purchased successfully!');
    }
}