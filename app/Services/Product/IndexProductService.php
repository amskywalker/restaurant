<?php

namespace App\Services\Product;

use App\Models\Product;

class IndexProductService
{
    public function run()
    {
        $product = new Product();
        return $product->all();
    }
}
