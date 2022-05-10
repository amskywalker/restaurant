<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\Seat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_a_order()
    {
        $order = Order::factory()->make();

        $this->post('/order/store', $order->toArray());

        $this->assertEquals(1, Order::all()->count());
    }
}
