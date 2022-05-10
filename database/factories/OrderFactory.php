<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Seat;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['seat_id' => "mixed", 'active' => "bool"])]
    public function definition(): array
    {
        return [
            'seat_id' => 1,
            'active' => false
        ];
    }
}
