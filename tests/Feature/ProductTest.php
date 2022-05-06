<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_product_price_can_be_updated()
    {
        $product = Product::factory()->create();

        $this->put("/product/{$product->id}/update", ['price' => 1.87]);

        $this->assertDatabaseHas('products',['id'=> $product->id , 'price' => 1.87]);
    }
}
