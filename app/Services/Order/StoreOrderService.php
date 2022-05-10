<?php

namespace App\Services\Order;

use App\Models\Order;

class StoreOrderService
{
    public function run(array $data)
    {
        $order = new Order();
        return $order->create($data);
    }
}
