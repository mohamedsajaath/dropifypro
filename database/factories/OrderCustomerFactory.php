<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderCustomer>
 */
class OrderCustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "order_id" => 1,
            "name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "address" => $this->faker->address(),
            "city" => $this->faker->city(),
            "province" => $this->faker->state(),
            "country_id" => 213,
            "zipcode" => $this->faker->randomNumber(5),
            "phone_no" => $this->faker->e164PhoneNumber(),

        ];
    }
}
