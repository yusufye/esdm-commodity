<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commodity;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\commodity_package>
 */
class Commodity_packageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(1, true),
            'description' => fake()->sentence(),
            'price' => fake()->randomNumber(7, true)
        ];
    }
}
