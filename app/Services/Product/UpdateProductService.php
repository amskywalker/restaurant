<?php

namespace App\Services\Product;

use App\Models\Product;

class UpdateProductService
{
    public function run(array $data, Product $product): bool
    {
        return $product->update($data);
    }
}
