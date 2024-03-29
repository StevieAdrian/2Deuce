<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmStatus extends Model
{
    use HasFactory;

    protected $table ='ms_filmstatus';

    protected $fillable = ['Filmstatus'];

    public function films()
    {
        return $this->hasMany('App\Models\Films');
    }
}
