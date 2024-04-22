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
    public function definition(): array
    {
        return [
            "Name" => fake()->name(),
            "Description" => fake()->text(),
            "Price" => fake()->numberBetween(100, 1000),
            "Quantity" => fake()->numberBetween(1, 100),
            "Category" => fake()->word(),
            "Thumbnail" => fake()->imageUrl(),
            "Image1" => fake()->imageUrl(),
            "Image2" => fake()->imageUrl(),
            "Image3" => fake()->imageUrl(),
            "Rating" => fake()->numberBetween(1, 5),
            "Review" => fake()->text(),
            "Brand" => fake()->word(),
        ];
    }
}
