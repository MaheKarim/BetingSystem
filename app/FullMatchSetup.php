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

    // relation with match setup table
    public function teamName(){
        return $this->belongsTo('App\TeamSetup', 'team_1', 'id');
    }

    // relation with match setup table team 2
    public function teamName2(){
        return $this->belongsTo('App\TeamSetup', 'team_2', 'id');
    }

    public function matchFormat(){
        return $this->belongsTo('App\Matchsetup', 'match_type', 'id' );
    }
}
