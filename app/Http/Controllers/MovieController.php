<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Movie;
use App\Models\Schedule;
use App\Models\Theaters;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie()
    {
        $movies = Films::all();
        return view('movie.main', compact('movies'));
    }

    public function payment()
    {
        return view('movie.payment');
    }

    public function dashboard()
    {
        return view('movie.dashboard');
    }

    public function details($id) {
        $movies = Films::find($id);
        return view('movie.details', ['movie' => $movies]);
        // return view('movie.details', compact('movies'));
    }

    public function schedule($id)
    {
        $movies = Films::find($id);
        $schedule = Schedule::all();
        $theater = Theaters::all();
        return view('movie.schedule',[
            'movie' => $movies,
            'schedule' => $schedule,
            'theaters'=>$theater,
        ]);
    }
}
