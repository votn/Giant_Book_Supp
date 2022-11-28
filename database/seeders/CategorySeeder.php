<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('categories')->insert(
            [
                'category_name' => 'Fiksi'
            ]
        );
        DB::table('categories')->insert(
            [
                'category_name' => 'Sastra'
            ]
        );
        DB::table('categories')->insert(
            [
                'category_name' => 'Psikologi'
            ]
        );

    }
}
