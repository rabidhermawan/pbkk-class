<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\goodthings>
 */
class GoodthingsFactory extends Factory
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
            'goodthings' => fake()->realText(20),
            'goodvalues' => fake()->numberBetween(0,100),
            'description' => fake()->realText(100)
        ];
    }
}
