<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaturityRating;

class MaturityRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('maturity.index',[
            'maturity' => MaturityRating::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maturity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'MaturityRating' => 'required|string',
        ]);

        $ms_maturityrating = new MaturityRating();
        $ms_maturityrating->MaturityRating = $request->MaturityRating;
        $ms_maturityrating->save();

        return back()->withSuccess('New Maturity Rating created successfully');
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
        $ms_maturityrating = MaturityRating::where('id',$id)->first();

        return view('maturity.edit', ['maturity' => $ms_maturityrating]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'MaturityRating' => 'required|string',
        ]);
        $ms_maturityrating = MaturityRating::where('id',$id)->first();
        
        $ms_maturityrating->MaturityRating = $request->MaturityRating;

        $ms_maturityrating->save();

        return back()->withSuccess('New Maturity Rating updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $ms_maturityrating=MaturityRating::where('id', $id)->first();
       $ms_maturityrating->delete();
       return back()->withSuccess('Maturity Rating Delete Success');
    }
}
