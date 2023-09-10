<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->productName,
            'description'=>$this->faker->paragraph,
            'image'=>$this->faker->imageUrl(),
            'price'=>$this->faker->numberBetween(100, 1000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
