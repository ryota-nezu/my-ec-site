<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => 'テスト商品' . $i,
                'description' => 'これは商品' . $i . 'の説明です。',
                'price' => 1000 * $i,
                'stock' => 10,
            ]);
        }
    }
}
