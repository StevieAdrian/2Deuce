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
    'TheaterID', 
    ];

    public function theater()
    {
        return $this->belongsTo('App\Models\Theaters','TheaterID');
    }

}
