<?php

namespace Database\Seeders;

use App\Models\BookReviewCommentModel;
use Illuminate\Database\Seeder;

class BookReviewCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookReviewCommentModel::factory()->count(20)->create();
    }
}
