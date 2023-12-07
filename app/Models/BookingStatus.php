<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingStatus extends Model
{
    use HasFactory;
    
    protected $table ='ms_bookingstatus';

    protected $fillable = ['BookingStatus'];

    public function booking()
    {
        return $this->hasMany('App\Models\Booking');
    }

}
