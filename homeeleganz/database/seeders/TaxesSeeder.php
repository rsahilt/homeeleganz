<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('taxes')->insert([
            'province' => 'Alberta',
            'pst' => '0',
            'gst' => '0.05',
            'hst' => '0',
        ]);
        DB::table('taxes')->insert([
            'province' => 'British Columbia',
            'pst' => '0.07',
            'gst' => '0.05',
            'hst' => '0',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Manitoba',
            'pst' => '0.07',
            'gst' => '0.05',
            'hst' => '0',
        ]);
        DB::table('taxes')->insert([
            'province' => 'New Brunswick',
            'pst' => '0',
            'gst' => '0',
            'hst' => '0.15',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Newfoundland and Labrador',
            'pst' => '0',
            'gst' => '0',
            'hst' => '0.15',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Northwest Territories',
            'pst' => '0',
            'gst' => '0.05',
            'hst' => '0',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Nova Scotia',
            'pst' => '0',
            'gst' => '0',
            'hst' => '0.15',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Nunavut',
            'pst' => '0',
            'gst' => '0.05',
            'hst' => '0',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Ontario',
            'pst' => '0',
            'gst' => '0',
            'hst' => '0.13',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Prince Edward Island',
            'pst' => '0',
            'gst' => '0',
            'hst' => '0.15',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Quebec',
            'pst' => '0.0975',
            'gst' => '0.05',
            'hst' => '0',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Saskatchewan',
            'pst' => '0.06',
            'gst' => '0.05',
            'hst' => '0',
        ]);
        DB::table('taxes')->insert([
            'province' => 'Yukon',
            'pst' => '0',
            'gst' => '0.05',
            'hst' => '0',
        ]);

        
    }
}
