<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaturityRating extends Model
{
    use HasFactory;

    protected $table ='ms_maturityrating';

    protected $fillable = ['MaturityRating'];

    public function films()
    {
        return $this->hasMany('App\Models\Films');
    }
}