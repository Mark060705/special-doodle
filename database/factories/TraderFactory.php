<?php

namespace Database\Factories;

use App\Models\Trader;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Trader>
 */
class TraderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'description' => fake()->text(),
            'country' => fake()->country()
        ];
    }
}
