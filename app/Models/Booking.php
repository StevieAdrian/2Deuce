<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table ='ms_booking';

    protected $fillable = [
    'UserId', 
    'ScheduleId', 
    'BookingStatusId', 
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','UserId');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule','ScheduleId');
    }

    public function bookingStatus()
    {
        return $this->belongsTo('App\Models\BookingStatus','BookingStatusId');
    }

    public function seat()
    {
        return $this->hasMany('App\Models\Seats');
    }
}
