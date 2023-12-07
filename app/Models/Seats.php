<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Theaters;


class Seats extends Model
{
    protected $table ='ms_seats';

    protected $fillable = ['SeatName', 'SubTotal'];

    use HasFactory;

    public function seats() {
        return $this->hasMany('App\Models\Seats');
    }

    public function theaters() {
        return $this->belongsTo('App\Models\Theaters');
    }
}
