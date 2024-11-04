<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'categorie_id' => \App\Models\Categorie::inRandomOrder()->first()->id ?? \App\Models\Categorie::factory()->create()->id,
            'description' => fake()->sentence(),  // Changed to a sentence for better description
            'qty' => fake()->randomFloat(2, 1, 1000),
            'price' => fake()->randomFloat(2, 10, 1000),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
