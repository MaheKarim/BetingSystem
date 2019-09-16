<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FullMatchSetup extends Model
{
    protected $guarded = [''];

    /*
    *
    * FOr Time
    *
    */
    protected $casts = [
        'begin' => 'date:hh:mm'
    ];
}
