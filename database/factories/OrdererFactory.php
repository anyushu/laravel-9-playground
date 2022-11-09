<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Orderer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orderer>
 */
class OrdererFactory extends Factory
{
    protected $model = Orderer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'name' => fake()->kanaName(),
            'telephone_number' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
        ];
    }
}
