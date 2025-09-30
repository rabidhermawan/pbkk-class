<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goodplace>
 */
class GoodplaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'goodthings' => fake()->name(),
            'place_name' => fake()->company(),
            'description' => fake()->paragraph(10),
            'address' => fake()->city()
        ];
    }
}
