<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => Str::random(10),
            'images' => Str::random(10),
            'price_sale' => 1000,
            'price' => 2000,
            'quantity' => 1212,
            'detail' => Str::random(10),
            'description' => Str::random(10),
            'category_id' => Category::first()->id,
        ]);
    }
}
