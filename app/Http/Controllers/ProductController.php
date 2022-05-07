<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use App\Services\Product\UpdateProductService;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function update(UpdateProductRequest $updateProductRequest, UpdateProductService $updateProductService, Product $product): RedirectResponse
    {
        $data = $updateProductRequest->validated();
        $productUpdated = $updateProductService->run($data, $product);
        if(!$productUpdated){
            return redirect()->back(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return redirect()->back(Response::HTTP_OK);
    }
}
