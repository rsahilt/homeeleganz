<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 1; $i<=50; $i++)
        {
            $categories = range(1,5);
            shuffle($categories);
            
                DB::table('category_product')->insert([
                    'product_id'=>$i, 'category_id'=>array_pop($categories)
                ]);
                DB::table('category_product')->insert([
                    'product_id'=>$i, 'category_id'=>array_pop($categories)
                ]);
                DB::table('category_product')->insert([
                    'product_id'=>$i, 'category_id'=>array_pop($categories)
                ]);
           
        }
    }
}
