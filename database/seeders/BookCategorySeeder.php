<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('book_categories')->insert(
            [
                'book_id' => 1,
                'category_id' => 1
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 2,
                'category_id' => 1
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 3,
                'category_id' => 1
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 4,
                'category_id' => 1
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 5,
                'category_id' => 1
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 6,
                'category_id' => 1
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 7,
                'category_id' => 1
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 8,
                'category_id' => 2
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 9,
                'category_id' => 2
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 10,
                'category_id' => 2
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 11,
                'category_id' => 2
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 12,
                'category_id' => 2
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 13,
                'category_id' => 3
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 14,
                'category_id' => 3
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 15,
                'category_id' => 3
            ]
        );
        DB::table('book_categories')->insert(
            [
                'book_id' => 16,
                'category_id' => 3
            ]
        );

    }
}
