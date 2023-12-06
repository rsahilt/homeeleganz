<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['Name' => 'Dining Room'],
            ['Name' => 'Living Room'],
            ['Name' => 'Bedroom'],
            ['Name' => 'Home Office'],
            ['Name' => 'Patio'],
        ];

        DB::table('categories')->insert($categories);
    }
}
