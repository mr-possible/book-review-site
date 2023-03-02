<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookModel>
 */
class BookModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /**
         * Faker Library: https://github.com/fzaninotto/Faker
         */
        return [
            'book_title' => fake()->sentence($nbWords = 4, $variableNbWords = true),
            'book_author' => fake()->name,
            'book_description' => fake()->paragraph($nbSentences = 3, $variableNbSentences = true),
            'book_isbn' => fake()->isbn13,
            'book_publisher' => fake()->company,
            'book_pagecount' => fake()->numberBetween($min = 100, $max = 500),
            'book_language' => fake()->languageCode,
            'book_price' => fake()->randomFloat($nbMaxDecimals = 2, $min = 5, $max = 50),
        ];
    }
}
