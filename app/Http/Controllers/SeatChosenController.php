<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;
use App\Models\Theaters;
use App\Models\Seats;

class SeatChosenController extends Controller
{
    public function saveSeats(Request $request){
        $seats = $request->input('seats');
        $subtotal = $request->input('subtotal');

        Seats::create([
            'selectedSeats' => $seat,
            'subtotal' => $subtotal,
        ]);

        return redirect()->route('movie');
        // return view('seats.theaterSeat');
        // return redirect()->back()->with('Success!');
    }


}
