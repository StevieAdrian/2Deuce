<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theaters extends Model
{
    use HasFactory;

    protected $table ='ms_theaters';

    protected $fillable = [
    // 'TheaterID',
    'Name',
    'NumberOfStudios',
    'Address',
    ];

    public function studio()
    {
        return $this->hasMany('App\Models\Studio');
    }

}
