<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{

    protected $table = 'volunteer';

    public $fillable = [
        'title',
        'description',
        'place',
        'date',
        'image_1',
        'image_2',
        'image_3'
    ];


}
