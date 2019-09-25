<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password', 'phn_number', 'user_role',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userType(){
        return $this->belongsTo('App\UserRole', 'user_role', 'id' );
    }
}
