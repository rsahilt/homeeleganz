<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Dining Room'
        ]);
        DB::table('categories')->insert([
            'name' => 'Living Room'
        ]);
        DB::table('categories')->insert([
            'name' => 'Bed Room'
        ]);
        DB::table('categories')->insert([
            'name' => 'Home Office'
        ]);
        DB::table('categories')->insert([
            'name' => 'Garden Accents'
        ]);

    }
}
