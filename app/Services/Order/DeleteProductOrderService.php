<?php

namespace App\Services\Order;

use App\Models\Order;

class DeleteProductOrderService
{
    public function run($product, Order $order): void
    {
        $ids = $order->products()->allRelatedIds()->toArray();
        for ($i = 0; $i < count($ids); $i++){
            if ($ids[$i] == $product){
                unset($ids[$i]);
                break;
            }
        }
        $order->products()->detach();
        $order->products()->attach($ids);
    }
}
