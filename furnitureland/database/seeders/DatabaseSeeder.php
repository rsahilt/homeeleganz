<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Regular User Login
        \App\Models\User::factory()->create([
            'first_name' => 'Regular',
            'last_name' => 'User',
            'email' => 'user@sample.com',
            'address' => 'PACE, Buhler Centre, UofW',
            'street' => '460 Portage Ave',
            'city' => 'Winnipeg',
            'province' => 'Manitoba',
            'country' => 'Canada',
            'postal_code' => 'R3B 2P7',
            'phone_number' => '1234562345',
            'password' => Hash::make('password')
        ]);

        //Admin User Login
        \App\Models\User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@sample.com',
            'address' => 'Admin Main Address',
            'street' => '179 Grande Allée O',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'country' => 'Canada',
            'postal_code' => 'G1R 2H1',
            'phone_number' => '1234567890',
            'password' => Hash::make('admin'),
            'is_admin' => true
        ]);

        // \App\Models\Product::factory(50)->create();

        $this->call([
            CategoriesSeeder::class,
            TaxesSeeder::class,
            CategoryProductSeeder::class,
            ProductsSeeder::class
        ]);

    }
}
