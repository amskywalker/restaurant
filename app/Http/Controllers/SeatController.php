<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Services\IndexSeatService;
use App\Services\Order\StoreOrderService;
use App\Services\Seats\OpenOrderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SeatController extends Controller
{
    public function index(IndexSeatService $indexSeatService): Factory|View|Application
    {
        $seats = $indexSeatService->run(['orders']);
        return view('seats.index', compact('seats'));
    }

    public function show(Seat $seat, OpenOrderService $openOrderService, StoreOrderService $storeOrderService): Factory|View|Application
    {
        if ($openOrderService->run($seat)) {
            $order = $seat?->orders_active?->first();
        } else {
            $order = $storeOrderService->run(['seat_id' => $seat->id]);
        }

        return view('seats.show', compact('seat', 'order'));
    }
}
