<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\StoreOrderRequest;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Models\Order;
use App\Services\Order\DeleteProductOrderService;
use App\Services\Order\StoreOrderService;
use App\Services\Order\UpdateOrderService;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function store(StoreOrderRequest $storeOrderRequest, StoreOrderService $storeOrderService): RedirectResponse
    {
        $data = $storeOrderRequest->validated();
        $orderCreated = $storeOrderService->run($data);
        if(! $orderCreated){
            return redirect()->back()->withErrors('Não foi possível criar a comanda');
        }
        return redirect()->back();
    }

    public function update(UpdateOrderRequest $updateOrderRequest, UpdateOrderService $updateOrderService, Order $order): RedirectResponse
    {
        $data = $updateOrderRequest->validated();
        $updateOrderService->run($data, $order);
        return redirect()->back();
    }

    public function product_delete(DeleteProductOrderService $deleteProductOrderService, Order $order, $product): RedirectResponse
    {
        $deleteProductOrderService->run($product, $order);
        return redirect()->back();
    }


}
