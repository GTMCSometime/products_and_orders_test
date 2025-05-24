<?php

namespace Database\Factories;

use App\Models\Product;
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
            'product_id' => Product::get()->random()->id,
            'customer_name' => $this->faker->name(),
            'customer_comment' => $this->faker->text(10),
            'product_count' => rand(1, 10),
            'created_at' => $this->faker->dateTimeBetween('-20 day', 'now'),
        ];
    }
}
