<?php

namespace App\Services\Seats;

use App\Models\Seat;

class OpenOrderService
{
    public function run(Seat $seat): bool
    {
        return $seat?->orders_active?->first()?->active == "Aberto";
    }
}
