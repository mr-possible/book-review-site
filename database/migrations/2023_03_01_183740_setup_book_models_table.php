<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('book_models', function (Blueprint $table) {
            $table->string('book_title');
            $table->string('book_author');
            $table->text('book_description');
            $table->string('book_isbn');
            $table->string('book_publisher');
            $table->integer('book_pagecount');
            $table->string('book_language');
            $table->decimal('book_price', 8, 2);
        });
    }
};
