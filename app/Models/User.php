<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function coursesCreated()
    {
        return $this->hasMany(Course::class, 'admin_id');
    }

    public function purchasedCourses() {
        return $this->belongsToMany(
            Course::class,    
            'courses_user',   
            'user_id',       
            'course_id'     
        ) ->withPivot('purchased_at','price_paid');
    }

    public function scopeCountCoursesPurchased(Builder $query) {
        return $query->withCount('purchasedCourses')
            ->orderBy('purchased_courses_count', 'desc');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function carts()
    {
        return $this->hasOne(Cart::class);
    }
    public function courseOfUser()
    {
        return $this->hasMany(CourseOfUser::class);
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_of_user', 'user_id', 'course_id');
    }

}
