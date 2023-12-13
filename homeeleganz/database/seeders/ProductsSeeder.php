<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'ErgoComfort Office Chair',
            'image' => 'resized_office_1.jpg',
            'summary' => 'A comfortable and ergonomic office chair designed for long hours of work.',
            'color' => 'Black',
            'material' => 'Mesh, PU Leather',
            'unit_price' => '299.99',
            'description' => 'The ErgoComfort Office Chair features adjustable lumbar support, padded armrests, and a breathable mesh back for optimal comfort during extended periods of sitting. The PU leather seat adds a touch of elegance while ensuring durability. Its ergonomic design promotes proper posture and reduces strain on the back and neck.',
            'brand' => 'ComfortMax',
            'weight' => '35 lbs',
            'dimensions' => '24x26x45 inches'
        ]);
    }
}
