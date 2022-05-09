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

        $response = $this->get('/seats');

        $response->assertSee($seat->name);
    }
}
