<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'author' => fake()->name(),   
            'category' => fake()->randomElement(['programming', 'design', 'marketing']),
            'duration' => fake()->numberBetween(1, 100),
            'description' => fake()->paragraph(10),
            'image' => fake()->imageUrl(640, 480, 'cats'),
            'level' => fake()->randomElement(['beginner', 'intermediate', 'advanced']),
            'price' => fake()->randomFloat(2, 10, 100), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
