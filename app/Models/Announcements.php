<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    protected $table = 'announcements';

    public $fillable = [
        'event_name',
        'event_place',
        'event_date',
        'event_description',
        'seat_no'
    ];

   


}


