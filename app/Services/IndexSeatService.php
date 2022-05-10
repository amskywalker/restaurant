<?php

namespace App\Services;

use App\Models\Seat;
use Illuminate\Database\Eloquent\Collection;

class IndexSeatService
{

    public function run(array $relationships = []): Collection
    {
        $seat = new Seat();
        return $seat->with($relationships)->get();
    }
}
