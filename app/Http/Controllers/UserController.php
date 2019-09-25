<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth\User;

class UserController extends Controller
{
    // start coding 

    public function edit(){
        $data = [ ];
      //  $users = 
        $data['users'] = new User::();

        return view('/editprofile', $data);

    }
}
