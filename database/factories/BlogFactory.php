<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_primary' => fake()->imageUrl(),
            'title' => fake()->sentence(),
            'image_left' => fake()->imageUrl(),
            'image_right' => fake()->imageUrl(),
            'upper_text' => fake()->sentence(),
            'image_mid' => fake()->imageUrl(),
            'mid_text' => fake()->sentence(),
            'lower_text' => fake()->sentence(),
            'slug' => fake()->slug(),
            'status' => fake()->randomElement(['active', 'deactive']),
            'user_id' => 1
        ];
    }
}
