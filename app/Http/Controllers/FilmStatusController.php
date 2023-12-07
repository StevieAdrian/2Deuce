<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilmStatus;

class FilmStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('filmstatus.index',[
            'filmstatus' => FilmStatus::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filmstatus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Filmstatus' => 'required|string',
        ]);

        $ms_filmstatus = new FilmStatus();
        $ms_filmstatus->Filmstatus = $request->Filmstatus;
        $ms_filmstatus->save();

        return back()->withSuccess('New Film Status created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ms_filmstatus = FilmStatus::where('id',$id)->first();

        return view('filmstatus.edit', ['filmstatus' => $ms_filmstatus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Filmstatus' => 'required|string',
        ]);
        $ms_filmstatus = FilmStatus::where('id',$id)->first();
        
        $ms_filmstatus->Filmstatus = $request->Filmstatus;

        $ms_filmstatus->save();

        return back()->withSuccess('New Film Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $ms_filmstatus=FilmStatus::where('id', $id)->first();
       $ms_filmstatus->delete();
       return back()->withSuccess('Film Status Delete Success');
    }
}
