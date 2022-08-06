<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stall>
 */
class StallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'store_id' => fake()->numberBetween(1,5),
            'stall_owner' => fake()->name(),
            'product_name' => fake()->randomElement(['Milk tea','Tea','Rice Cake','Coco','Shake']),
            'price' => fake()->numberBetween(100,500),
            'description' => fake()->sentence(),
        ];
    }
}
