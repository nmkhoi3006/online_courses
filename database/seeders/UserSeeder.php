<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\Review;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo 3 admin và các khóa học mà họ quản lý
        User::factory(3)->admin()->create()->each(function ($user) {
            $numCoursesCreated = rand(1, 10);
            Course::factory($numCoursesCreated)->for($user, 'admin')->create();
        });

        // Tạo 20 user và các khóa học mà họ đã mua
        User::factory(20)->user()->create()->each(function ($user) {
            $numCoursesPurchased = 10;

            // Lấy ngẫu nhiên các khóa học để gán cho user này
            $courses = Course::inRandomOrder()->take($numCoursesPurchased)->get();

            // Gắn user vào mối quan hệ buyers của các khóa học
            foreach ($courses as $course) {
                $user->purchasedCourses()->attach($course->id, [
                    'purchased_at' => now()->subDays(rand(1, 365)), // Ngày mua ngẫu nhiên trong 1 năm qua
                    'price_paid' => $course->price, // Giá đã trả là giá của khóa học
                ]);

                Review::factory(1)->create([
                    'course_id' => $course->id,
                    'user_id' => $user->id,
                ]);
            }
        });
    }
}
