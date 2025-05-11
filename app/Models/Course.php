<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function scopeTitle(Builder $query, string $title)
    {
        return $query->where('title', 'like', "%$title%");
    }

    public function scopePopular(Builder $query)
    {
        return $query->withCount('reviews')
            ->orderBy('reviews_count', 'desc');
    }

    public function scopeHighestRating(Builder $query)
    {
        return $query->withAvg('reviews', 'rating')
            ->orderBy('reviews_avg_rating', 'desc');
    }

    public function scopeLowestPrice(Builder $query)
    {
        return $query->orderBy('price', 'asc');
    }

    public function scopeHighestPrice(Builder $query)
    {
        return $query->orderBy('price', 'desc');
    }

    public function scopeCategory(Builder $query, string $category)
    {
        return $query->where('category', 'like', "%$category%");
    }
    
    public function scopeLevel(Builder $query, string $level)
    {
        return $query->where('level', 'like', "%$level%");
    }
}
