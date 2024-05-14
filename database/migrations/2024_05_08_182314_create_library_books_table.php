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
        Schema::create('library_books', function (Blueprint $table) {
            $table->string('book_number');
            $table->string('book_name');
            $table->string('book_author');
            $table->string('book_press');
            $table->Integer('book_price');
            $table->string('book_local');
            $table->string('book_status')->default('未借出');
            $table->timestamps();
        });
        Schema::table('library_books',function (Blueprint $table){
            $table->BigInteger('book_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('library_books');
    }
};
