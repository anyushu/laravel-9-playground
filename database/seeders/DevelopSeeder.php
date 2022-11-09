<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Orderer;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class DevelopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory()
            ->has(
                Shop::factory()->count(3)->has(
                    Product::factory()->count(3)
                )->has(
                    Order::factory()->count(5)
                        ->has(
                            Orderer::factory()
                        )
                        ->has(
                            OrderedProduct::factory()->count(2)
                        )
                )
            )->create(['domain' => 'develop']);
    }
}
