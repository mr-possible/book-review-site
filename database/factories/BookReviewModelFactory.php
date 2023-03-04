<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\BookModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookReviewModel>
 */
class BookReviewModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $db_user_ids = User::pluck('id')->toArray();
        $db_book_ids = BookModel::pluck('id')->toArray();

        /**
         * Faker Library: https://github.com/fzaninotto/Faker
         */
        return [
            'book_review_title' => fake()->sentence(),
            'book_review_body' => fake()->paragraph(),
            'book_review_rating' => fake()->numberBetween(1, 5),
            'book_review_date' => fake()->date(),
            'book_review_upvotes' => fake()->numberBetween(0, 100),
            'book_review_downvotes' => fake()->numberBetween(0, 100),
            'book_id' => fake()->randomElement($db_book_ids),
            'user_id' => fake()->randomElement($db_user_ids),
        ];

        // On line 21 and 22 - we are getting id of existing users and existing books from the database.
        // On line 34 and 35 - we are seeding random relationships from existing models - User & BookModel.
    }
}