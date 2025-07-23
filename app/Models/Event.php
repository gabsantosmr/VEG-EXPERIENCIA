<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

public function users(): BelongsToMany
{
    return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id');
}
}
