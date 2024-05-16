<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_order' => $this->faker->dateTime(),
            'route' => $this->faker->colorName(),

            'registered_by' => \App\Models\User::factory(),
            'status' => "1",

            'client_id' => \App\Models\Client::factory(),
        ];
    }
}
