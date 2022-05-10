<?php

namespace App\Services\Order;

use App\Models\Order;
use Illuminate\Support\Arr;

class UpdateOrderService
{
    public function run(array $data, Order $order): bool
    {
        if (Arr::has($data, 'active')){
            $data['active'] = !($data['active'] == 'false');
        }

        if (Arr::has($data, 'product_id')){
            $order->products()->attach(Arr::get($data, 'product_id'));
        }
        return $order->update($data);
    }
}
