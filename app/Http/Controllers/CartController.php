<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;

class CartController extends Controller
{
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

    // lấy cũ hoặc tạo mới
    $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

    // Kiểm tra  tồn tại 
    $cartItem = CartItem::where('cart_id', $cart->id)
                        ->where('course_id', $validatedData['course_id'])
                        ->first();

    if ($cartItem) {
        // Nếu đã tồn tại
        return redirect()->route('cart.show')->with('error', 'Course is already in your cart!');
    }

    CartItem::create([
        'cart_id' => $cart->id,
        'course_id' => $validatedData['course_id'],
        'quantity' => 1,
    ]);

    return redirect()->route('cart.show')->with('success', 'Course added to cart successfully!');
    }
}