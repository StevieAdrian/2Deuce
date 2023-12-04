<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;

    protected $table ='ms_films';

    protected $fillable = [
    'FilmName', 
    'FilmDirector', 
    'MaturityRatingId', 
    'FilmDuration', 
    'FilmStatusID', 
    'FilmSynopsis', 
    'FilmWriter', 
    'FilmPoster
    '];
}
