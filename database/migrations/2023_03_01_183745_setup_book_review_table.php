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
        Schema::table('book_review_models', function (Blueprint $table) {
            $table->string('book_review_title');
            $table->text('book_review_body');
            $table->integer('book_review_rating');
            $table->date('book_review_date');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('book_id')->references('id')->on('book_models')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }
};
