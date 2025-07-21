<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'date_start',
        'date_final',
        'location',
        'description',
        'image'
    ];
    
    protected $dates = [
        'date_event',
        'date_final',
    ];
}
