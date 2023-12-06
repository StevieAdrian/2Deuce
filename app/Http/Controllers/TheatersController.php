<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theaters;

class TheatersController extends Controller
{

    public function index()
    {
        // return view('theaters.index');
        return view('theaters.index',[
            'theaters' => Theaters::get()
        ]);
    }

    public function create()
    {
        return view('theaters.createTheaters');
    }

    public function store(Request $request)
    {
        Theaters::create([
            'Name' => $request->Name,
            'NumberOfStudios' => $request->NumberOfStudios,
            'Address' => $request->Address,
        ]);

        return back()->withSucess('New Theaters Added');
    }
}
