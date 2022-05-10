<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->create([
            'name' => 'Água'
        ]);

        Product::factory()->create([
            'name' => 'Cerveja'
        ]);

        Product::factory()->create([
            'name' => 'Refrigerante'
        ]);

        Product::factory()->create([
            'name' => 'PF'
        ]);

        Product::factory()->create([
            'name' => 'Brigadeiro'
        ]);
    }
}
