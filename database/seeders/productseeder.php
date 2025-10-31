<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product' => 'Apple X13',
            'deskripsi' => 'ini hp bagus bro penyimpanan 1TB',
        ]);
    }
}
