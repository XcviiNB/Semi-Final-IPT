<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $stat = ['Available', 'Unavailable'];
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->sentence(),
            'value' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 50000),
            'status' => $this->faker->randomElement($stat)
        ];
    }
}
