<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LibraryUser>
 */
class LibraryBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ? string $password;
    public function definition(): array
    {
        return [
            //
            'book_number' => fake()->numberBetween(1,9999),
            'book_name' => fake()->name(),
            'book_author' => fake()->name(),
            'book_press' => fake()->name(),
            'book_price' => fake()->numberBetween(1,9999),
            'book_local' => fake()->name(),
            'book_status' => fake()->name(),
        ];
    }
}
