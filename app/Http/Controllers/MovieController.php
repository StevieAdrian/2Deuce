<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie()
    {
        return view('movie.main');
    }

    public function payment()
    {
        return view('movie.payment');
    }

    public function dashboard()
    {
        return view('movie.dashboard');
    }
}
