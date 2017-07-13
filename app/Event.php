<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
      'title',
      'location',
      'event_date',
      'ticket',
      'description',
      'slug',
      'event_image',
    ];

    protected $dates = [
      'event_date',
    ];

    public function getEventDateAttribute($value)
    {
     $calender =  \Carbon\Carbon::parse($value)->format('d, M, Y');
     $human =  \Carbon\Carbon::parse($value)->diffForHumans();
     return $calender .' ( ' .$human .' )';

    }
}
