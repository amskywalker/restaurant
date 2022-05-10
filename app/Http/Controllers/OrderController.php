<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\StoreOrderRequest;
use App\Services\Order\StoreOrderService;
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
}
