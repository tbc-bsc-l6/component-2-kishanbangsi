<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word(),
            'author' => fake()->name(),
            'pages' => fake()->numberBetween($min = 1, $max = 5000),
            'band' => fake()->word(),
            'studio' => fake()->catchPhrase(),
            'playlength' => fake()->numberBetween($min = 1, $max = 1000),
            'price' => fake()->numberBetween($min = 1, $max = 20),
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(36, 56, 'animals', true)
        ];
    }
}
