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
        Schema::create('library_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_number');
            $table->string('password');
            $table->string('email');
            $table->timestamp('verified_at');
            $table->string('is_admin')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('library_users');
    }
};
