<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;
use App\Models\Theaters;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('studio.index',[
            'studio' => Studio::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $theater = Theaters::all();


        return view('studio.create',[
            'theater' => $theater,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'StudioName' => 'required|string',
            'TheaterID' => 'required|numeric',
        ]);

        $ms_studio = new Studio();
        $ms_studio->StudioName = $request->StudioName;
        $ms_studio->TheaterID = $request->TheaterID;
        $ms_studio->save();

        return back()->withSuccess('New Studio Added');
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
        $ms_studio = Studio::where('id',$id)->first();
        $theater = Theaters::all();

        return view('studio.edit', [
            'studio' => $ms_studio,
            'theater' => $theater
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'StudioName' => 'required|string',
            'TheaterID' => 'required|numeric',
        ]);

        $ms_studio = Studio::where('id',$id)->first();
        
        $ms_studio->StudioName = $request->StudioName;
        $ms_studio->TheaterID = $request->TheaterID;
        $ms_studio->save();

        return back()->withSuccess('Studio Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $ms_studio=Studio::where('id', $id)->first();
       $ms_studio->delete();
       return back()->withSuccess('Studio Delete Success');
    }
}
