<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'images' => Str::random(10),
            'link' => 'https://' . Str::random(10),
            'status' => 'Off',
            'date_start' => now(),
            'date_end' => now(),
        ]);
    }
}
