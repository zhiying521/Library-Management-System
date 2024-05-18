<?php

namespace Database\Seeders;

use App\Models\LibraryBook;
use App\Models\LibraryUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibraryUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//        LibraryUser::factory()->count(10)->create();
        LibraryBook::factory()->count(10)->create();

    }
}
