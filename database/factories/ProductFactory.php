<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'             => $this->faker->randomNumber(2),
            'name'           => $this->faker->word(),
            'sku'            => $this->faker->randomNumber(2),
            'insertion_date' => $this->faker->date('Y-m-d', 'now')
        ];
    }
}
