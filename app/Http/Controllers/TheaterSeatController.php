<?php

namespace App\Http\Controllers;

use App\Models\Seats;
use Illuminate\Http\Request;

class TheaterSeatController extends Controller
{
    public function seats()
    {
        // $seats = Seats::all();

        // return view('seats.theaterSeat', compact('seats'));
        return view('seats.theaterSeat');
    }

}
