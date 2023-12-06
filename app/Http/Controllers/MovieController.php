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

    public function dashboardbook()
    {
        return view('movie.dashboardbook');
    }

    public function dashboardtheaters()
    {
        return view('movie.dashboardtheaters');
    }

    public function dashboardfilms()
    {
        return view('movie.dashboardfilms');
    }

    public function details($id)
    {
        $movies = Films::find($id);
        return view('movie.details', ['movie' => $movies]);
        return view('movie.details', compact('movies'));
    }
}
