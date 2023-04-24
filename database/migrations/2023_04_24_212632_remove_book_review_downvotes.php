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
            $table->dropColumn('book_review_downvotes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book_review_models', function (Blueprint $table) {
            $table->integer('book_review_downvotes');
        });
    }
};