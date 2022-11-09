<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderedProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderedProduct>
 */
class OrderedProductFactory extends Factory
{
    protected $model = OrderedProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'product_name' => fake()->randomElement([
                'ハンバーグ', 'チャーハン', 'ラーメン', 'ピザ', 'パスタ', 'プリン'
            ]),
            'product_price' => fake()->randomElement([
                550, 780, 980, 1540, 1890, 2230
            ]),
        ];
    }
}
