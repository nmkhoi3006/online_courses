<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'email' => fake()->unique()->userName() . '@gmail.com',
            'role' => 'user',
            'password' => Hash::make("123"),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

     /** State: admin */
    public function admin()
    {
        return $this->state(fn(array $attrs) => [
            'role' => 'admin',
        ]);
    }

    /** State: người dùng thường */
    public function user()
    {
        return $this->state(fn(array $attrs) => [
            'role' => 'user',
        ]);
    }
}
