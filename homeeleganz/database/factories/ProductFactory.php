<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => 'default.jpg',
            'color' => fake()->safeColorName(),
            'material' => fake()->word(),
            'unit_price' => fake()->randomFloat(2, 10, 1000),
            'description' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'brand' => fake()->company(),
            'weight' => fake()->numberBetween(1, 10) . 'lbs',
            'dimensions' => fake()->numberBetween(1, 10) . 'x' . fake()->numberBetween(1, 10) . 'x' . fake()->numberBetween(1, 10) . ' inches',
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}
