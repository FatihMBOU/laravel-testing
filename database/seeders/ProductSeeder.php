<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Peer',
            'description' => 'Green',
            'price' => 12.99
        ]);

        Product::create([
            'name' => 'Banaan',
            'description' => 'Yellow',
            'price' => 22.50
        ]);
    }
}