<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookModel;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Book Reference: https://www.harpercollins.com/products/the-alchemist-paulo-coelho?variant=32207222538274
     */
    public function run(): void
    {
        /**
         * Using below a single instance only. 
         */
        // $book = [
        //     'book_title' => 'The Alchemist',
        //     'book_author' => 'Paulo Coelho',
        //     'book_description' => 'The Alchemist is a novel by Brazilian author Paulo Coelho.',
        //     'book_isbn' => '978-0061122415',
        //     'book_publisher' => 'HarperOne',
        //     'book_pagecount' => 208,
        //     'book_language' => 'English',
        //     'book_price' => 12.99,
        // ];

        // Book information sourced from:
        // - Goodreads: https://www.goodreads.com/book/show/865.The_Alchemist
        // - HarperCollins Publishers: https://www.harpercollins.com/products/the-alchemist-paulo-coelho?variant=32212166726706
        // - Amazon: https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061122416

        //BookModel::create($book);

        /**
         * Using factory-seeding approach below.
         */
        BookModel::factory()->count(20)->create();
    }
}
