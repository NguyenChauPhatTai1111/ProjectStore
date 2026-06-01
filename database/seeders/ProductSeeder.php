<?php

namespace Database\Seeders;

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
        $products = [
            [
                'name' => 'Ghế gỗ hiện đại',
                'price' => 1200000,
                'quantity' => 15,
                'image' => 'https://via.placeholder.com/300x300?text=Chair+1',
                'slug' => 'ghe-go-hien-dai',
                'discount_price' => 900000,
            ],
            [
                'name' => 'Bàn ăn cao cấp',
                'price' => 3500000,
                'quantity' => 8,
                'image' => 'https://via.placeholder.com/300x300?text=Table+1',
                'slug' => 'ban-an-cao-cap',
                'discount_price' => 2800000,
            ],
            [
                'name' => 'Giường ngủ kỹ thuật số',
                'price' => 5000000,
                'quantity' => 5,
                'image' => 'https://via.placeholder.com/300x300?text=Bed+1',
                'slug' => 'giuong-ngu-ky-thuat-so',
                'discount_price' => 4200000,
            ],
            [
                'name' => 'Tủ lạnh vintage',
                'price' => 8000000,
                'quantity' => 3,
                'image' => 'https://via.placeholder.com/300x300?text=Fridge+1',
                'slug' => 'tu-lanh-vintage',
                'discount_price' => 6500000,
            ],
            [
                'name' => 'Sofa da thật',
                'price' => 6500000,
                'quantity' => 10,
                'image' => 'https://via.placeholder.com/300x300?text=Sofa+1',
                'slug' => 'sofa-da-that',
                'discount_price' => 5200000,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
