<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'book_id' => Book::factory(),
            'title' => fake()->text(30),
            'description' => fake()->text(150),
            'stars' => fake()->numberBetween(1, 5),
            'is_approved' => fake()->boolean,
            'created_at' => fake()->dateTimeThisDecade,
            'updated_at' => fake()->dateTimeThisDecade,
        ];
    }
}
