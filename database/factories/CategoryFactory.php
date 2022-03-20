<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sku'           => $this->faker->unique()->randomNumber(),
            'title'         => $this->faker->word(),
            'sort_order'    => $this->faker->numberBetween(0, 99),
            'status'        => $this->faker->numberBetween(0, 1),
        ];
    }
}
