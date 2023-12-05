<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingStatus;

class BookingStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bookingstatus.index',[
            'bookstatus' => BookingStatus::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookingstatus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'BookingStatus' => 'required|string',
        ]);

        $ms_bookingstatus = new BookingStatus();
        $ms_bookingstatus->BookingStatus = $request->BookingStatus;
        $ms_bookingstatus->save();

        return back()->withSuccess('Booking Status created successfully');
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
        $ms_bookingstatus = BookingStatus::where('id',$id)->first();

        return view('bookingstatus.edit', ['bookstatus' => $ms_bookingstatus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'BookingStatus' => 'required|string',
        ]);
        $ms_bookingstatus = BookingStatus::where('id',$id)->first();
        
        $ms_bookingstatus->BookingStatus = $request->BookingStatus;

        $ms_bookingstatus->save();

        return back()->withSuccess('New Booking Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $ms_bookingstatus=BookingStatus::where('id', $id)->first();
       $ms_bookingstatus->delete();
       return back()->withSuccess('Booking Status Delete Success');
    }
}
