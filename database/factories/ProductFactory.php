<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'shop_id' => Shop::factory(),
            'name' => fake()->randomElement([
                'ハンバーグ', 'チャーハン', 'ラーメン', 'ピザ', 'パスタ', 'プリン'
            ]),
            'price' => fake()->randomElement([
                550, 780, 980, 1540, 1890, 2230
            ]),
        ];
    }
}
