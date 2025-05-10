<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItem extends Controller
{
    public function showCart()
{
    $cartItems = [
        (object) ['id' => 1, 'course_name' => 'Khóa học Laravel', 'instructor' => 'Nguyễn Văn A', 'price' => 500000],
        (object) ['id' => 2, 'course_name' => 'Khóa học ReactJS', 'instructor' => 'Trần Thị B', 'price' => 700000],
    ];

    $totalPrice = array_reduce($cartItems, function ($carry, $item) {
        return $carry + $item->price;
    }, 0);

    return view('cart', compact('cartItems', 'totalPrice'));
}
}

