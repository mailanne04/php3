<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Order;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $account = Account::first();
        $product = Product::first();
        $promotion = Promotion::first();

        Order::create([
            'account_id' => $account->id,
            'date' => now(),
            'product_id' => $product->id,
            'quantity_product' => 100,
            'promotion_id' => $promotion->id,
        ]);
    }
}
