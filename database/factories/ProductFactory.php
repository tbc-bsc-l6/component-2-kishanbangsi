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
            'title' => $this->faker->word(),
            'author' => $this->faker->name(),
            'band' => $this->faker->word(),
            'studio' => $this->faker->catchPhrase(),
            'price' => $this->faker->numberBetween($min = 1, $max = 20),
            'pages' => $this->faker->numberBetween($min = 1, $max = 5000),
            'playlength' => $this->faker->numberBetween($min = 1, $max = 1000),
            'description' => $this->faker->paragraph(),
            'image' => 'default.jpg'
        ];
    }
}
