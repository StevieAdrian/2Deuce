<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\BookingStatus;
use App\Models\User;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book.index',[
            'book' => Booking::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $schedule =Schedule::all();
        $bookstat = BookingStatus::all();


        return view('book.create',[
            'user' => $user,
            'schedule' => $schedule,
            'bookstat' => $bookstat
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'UserId' =>'required|exists:users,id',
            'ScheduleId' =>'required|exists:ms_schedule,id',
            'BookingStatusId' =>'required|exists:ms_bookingstatus,id',
        ]);
        

        $ms_booking = new Booking();
        $ms_booking->UserId = $request->UserId;
        $ms_booking->ScheduleId=$request->ScheduleId;
        $ms_booking->BookingStatusId = $request->BookingStatusId;
        $ms_booking->save();

        return back()->withSuccess('Booking Added');
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
        $ms_booking = Booking::where('id',$id)->first();
        $user = User::all();
        $schedule =Schedule::all();
        $bookstat = BookingStatus::all();

        return view('book.edit', [
            'book' => $ms_booking,
            'user' => $user,
            'schedule' => $schedule,
            'bookstat' => $bookstat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'UserId' =>'required|exists:users,id',
            'ScheduleId' =>'required|exists:ms_schedule,id',
            'BookingStatusId' =>'required|exists:ms_bookingstatus,id',
        ]);
        $ms_booking = Booking::where('id',$id)->first();

        $ms_booking->UserId = $request->UserId;
        $ms_booking->ScheduleId=$request->ScheduleId;
        $ms_booking->BookingStatusId = $request->BookingStatusId;
        $ms_booking->save();

        return back()->withSuccess('Booking Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $ms_booking=Booking::where('id', $id)->first();
       $ms_booking->delete();
       return back()->withSuccess('Booking Delete Success');
    }
}
