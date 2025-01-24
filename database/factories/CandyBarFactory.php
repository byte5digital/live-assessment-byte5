<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CandyBar>
 */
class CandyBarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'quantity' => $this->faker->numberBetween(1, 10),
            'popularity' => $this->faker->numberBetween(1, 100),
            'contains_chocolate' => $this->faker->boolean(),
            'last_bought' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
