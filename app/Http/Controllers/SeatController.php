<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Seat;
use App\Services\IndexSeatService;
use App\Services\Order\StoreOrderService;
use App\Services\Product\IndexProductService;
use App\Services\Seats\OpenOrderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SeatController extends Controller
{
    public function index(IndexSeatService $indexSeatService): Factory|View|Application
    {
        $seats = $indexSeatService->run(['orders']);
        return view('seats.index', compact('seats'));
    }

    public function show(OpenOrderService $openOrderService, StoreOrderService $storeOrderService, IndexProductService $indexProductService, Seat $seat, Order $order = null): Application|Factory|View|RedirectResponse
    {
        $products = $indexProductService->run();
        if ($order != null) {
            return view('seats.show', compact('seat', 'order', 'products'));
        }

        if ($openOrderService->run($seat)) {
            $order = $seat?->orders_active?->first();
        } else {
            $order = $storeOrderService->run(['seat_id' => $seat->id]);
        }

        return redirect()->route('seat.show', ['seat' => $seat, 'order' => $order]);
    }
}
