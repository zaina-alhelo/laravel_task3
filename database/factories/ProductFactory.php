<?php

namespace Database\Factories;

use App\Models\Category;
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
            'product_name' => $this->faker->word(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'product_description' => $this->faker->sentence(),
            'product_price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
