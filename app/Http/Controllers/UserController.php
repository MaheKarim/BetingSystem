<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth\User;

class UserController extends Controller
{
    // start coding

    public function index(){
        $data = [ ];

        return view('backend.admin.user-profile', $data);
    }
   
}
