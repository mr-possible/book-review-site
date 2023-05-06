<?php

namespace Database\Factories;

use App\Models\BookReviewModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookReviewCommentModel>
 */
class BookReviewCommentModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $db_user_ids = User::pluck('id')->toArray();
        $db_review_ids = BookReviewModel::pluck('id')->toArray();

        return [
            'review_id' => fake()->randomElement($db_review_ids),
            'user_id' => fake()->randomElement($db_user_ids),
            'comment' => $this->faker->paragraph
        ];
    }
}
