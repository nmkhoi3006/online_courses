<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_item'; // Tên bảng tùy chỉnh
    protected $fillable = [
        'cart_id',
        'course_id',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}