<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'cart_id', 
        'course_id', 
    ];

    // Quan hệ với Cart
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // Quan hệ với Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
