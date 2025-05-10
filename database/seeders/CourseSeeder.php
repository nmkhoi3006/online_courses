<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory(33)->create()->each(function (Course $course){
            $numReviews = rand(1, 10);
            $user = User::inRandomOrder()->first();
            Review::factory($numReviews)->good()->for($course, 'course')->for($user, 'user')->create();
        });

        Course::factory(33)->create()->each(function (Course $course){
            $numReviews = rand(1, 10);
            $user = User::inRandomOrder()->first();

            Review::factory($numReviews)->average()->for($course, 'course')->for($user, 'user')->create();
        });

        Course::factory(34)->create()->each(function (Course $course){
            $numReviews = rand(1, 10);
            $user = User::inRandomOrder()->first();

            Review::factory($numReviews)->bad()->for($course, 'course')->for($user, 'user')->create();
        });
    }
}
