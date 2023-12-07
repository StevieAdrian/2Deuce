<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Movie;
use App\Models\Schedule;
use App\Models\Theaters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function movie()
    {
        $movies = Films::all();
        return view('movie.main', compact('movies'));
    }

    public function main2()
    {
        $movies = Films::all();
        return view('movie.main2', compact('movies'));
    }

    public function payment()
    {
        return view('movie.payment');
    }

    public function dashboard()
    {
        $movies = Films::all();
        return view('movie.dashboard');
    }

    public function dashboardbook()
    {
        $movies = Films::all();
        return view('movie.dashboardbook');
    }

    public function dashboardtheaters()
    {
        $movies = Films::all();
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

    public function getTheater($id)
    {
        $theater = DB::select('SELECT mt.Name,mt.Address,msc.ScheduleDate,msc.ScheduleStart,mf.FilmName FROM ms_theaters mt
        INNER JOIN ms_studio ms
        ON mt.id = ms.TheaterId
        INNER JOIN ms_schedule msc
        ON ms.id = msc.StudioId
        INNER JOIN ms_films mf
        ON mf.id = msc.FilmId
        WHERE mf.id = ?',[$id]);

        return $theater;
    }

    public function schedule($id)
    {
        $movies = Films::find($id);
        $theater = $this->getTheater($id);

        return view('movie.schedule',[
            'movie' => $movies,
            'theater'=>$theater
        ]);
    }





}
