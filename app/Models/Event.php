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
    
    protected $garded = [];

    protected $dates = [
        'date_event',
        'date_final',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
