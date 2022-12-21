<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
    public function definition()
    {
        return [
            "user_id" => 2,
            "status" => $this->faker->randomElement([
                "1",
                "0",
            ]),
            "ebay_order_id" => $this->faker->uuid(),
            "total_amount" => $this->faker->randomNumber(3),
            "total_quantity" => $this->faker->randomNumber(1)
        ];
    }
}
