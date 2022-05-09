<?php

namespace App\Http\Controllers;

use App\Services\IndexSeatService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index(IndexSeatService $indexSeatService): Factory|View|Application
    {
        $seats = $indexSeatService->run();
        return view('seats.index', compact('seats'));
    }
}
