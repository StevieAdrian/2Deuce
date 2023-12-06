<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table ='ms_schedule';

    protected $fillable = [
    'ScheduleDate', 
    'ScheduleStart',  
    'ScheduleEnd', 
    'FilmId',
    'StudioId', 
    ];

    public function films()
    {
        return $this->belongsTo('App\Models\Films','FilmId');
    }

    public function studio()
    {
        return $this->belongsTo('App\Models\Studio','StudioId');
    }
}
