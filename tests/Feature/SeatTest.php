<?php

namespace Tests\Feature;

use App\Models\Seat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeatTest extends TestCase
{
    /**
     * @test
     */
    public function can_see_list_of_seats()
    {
        $seat = Seat::factory()->create();

        $response = $this->get('/seat');

        $response->assertSee($seat->name);
    }

    /**
     * @test
     */
    public function should_see_an_order_for_a_seat_and_create_if_have_not_order()
    {
        $seat = Seat::factory()->create();

        $response = $this->get("seat/{$seat->id}/order");

        $response->assertSee($seat->name);
    }
}
