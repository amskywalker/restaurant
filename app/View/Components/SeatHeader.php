<?php

namespace App\View\Components;

use App\Models\Order;
use App\Models\Seat;
use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeatHeader extends Component
{
    public Seat $seat;
    public Order $order;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($seat, $order)
    {
        $this->seat = $seat;
        $this->order = $order;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.seat-header');
    }
}
