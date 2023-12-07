<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $table ='ms_studio';

    protected $fillable = [
    'StudioName',  
    'TheaterId', 
    ];

    public function theater()
    {
        return $this->belongsTo('App\Models\Theaters','TheaterId');
    }

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule');
    }

    public function seat()
    {
        return $this->hasMany('App\Models\Seats');
    }

}
