<?php

namespace App\Http\Controllers;

use App\Models\Seats;
use Illuminate\Http\Request;

class TheaterSeatController extends Controller
{
    public function seats()
    {
        // $seats = Seats::all();
        // $taken = Seats::pluck('SeatName')->toArray();
        // return view('seats.theaterSeat', compact('seats'));
        // return view('seats.theaterSeat', compact('taken'));
        return view('seats.theaterSeat');
    }

    public function saveSeats(Request $request){
        $seat = $request->input('SeatName');
        $subtotal = $request->input('SubTotal');

        // dd($seat);
        // dd($total);
        // dd($subtotal);
        Seats::create([
            'SeatName' => $seat,
            'SubTotal' => $subtotal,
        ]);

        // return view('seats.theaterSeat', ['taken' => $taken]);
        return view('seats.theaterSeat');
        // return redirect()->back()->with('Success!');
        // return redirect()->route('movie');
        // return view('seats.theaterSeat');
    }

}
