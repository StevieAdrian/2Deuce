<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Movie;
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

    public function schedule()
    {
        return view('movie.schedule');
    }
}
