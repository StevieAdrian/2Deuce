<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use App\Models\Films;
use App\Models\Studio;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('schedule.index',[
          'schedule' => Schedule::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $films= Films::all();
        $studio= Studio::all();

        return view('schedule.create',[
          'films' => $films,
          'studio' => $studio
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ScheduleDate' =>'required|date',
            'ScheduleStart' =>'date_format:H:i',
            'ScheduleEnd' =>'required|date_format:H:i|after:ScheduleStart',
            'FilmId' =>'required|exists:films,id',
            'StudioId' =>'required|exists:studio,id',
        ]);

        $ms_schedule = new Schedule();
        $ms_schedule->ScheduleDate = $request->ScheduleDate;
        $ms_schedule->ScheduleStart = $request->ScheduleStart;
        $ms_schedule->ScheduleEnd = $request->ScheduleEnd;
        $ms_schedule->FilmId = $request->FilmId;
        $ms_schedule->StudioId = $request->StudioId;
        $ms_schedule->save();

        return back()->withSuccess('New Schedule Added');
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
        $ms_schedule= Schedule::where('id',$id)->first();
        $films= Films::all();
        $studio= Studio::all();

        return view('schedule.edit', [
          'schedule' => $ms_schedule,
            'films' => $films,
          'studio' => $studio
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'ScheduleDate' =>'required|date',
            'ScheduleStart' =>'date_format:H:i',
            'ScheduleEnd' =>'required|date_format:H:i|after:ScheduleStart',
            'FilmId' =>'required|exists:films,id',
            'StudioId' =>'required|exists:studio,id',
        ]);

        $ms_schedule = Schedule::where('id',$id)->first();

        $ms_schedule->ScheduleDate = $request->ScheduleDate;
        $ms_schedule->ScheduleStart = $request->ScheduleStart;
        $ms_schedule->ScheduleEnd = $request->ScheduleEnd;
        $ms_schedule->FilmId = $request->FilmId;
        $ms_schedule->StudioId = $request->StudioId;
        $ms_schedule->save();

        return back()->withSuccess('New Schedule Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ms_schedule= Schedule::where('id', $id)->first();
        $ms_schedule->delete();
        return back()->withSuccess('Schedule Delete Success');
    }
}
