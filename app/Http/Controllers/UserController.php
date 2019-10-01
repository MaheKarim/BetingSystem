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

    public function edit(){
        $data = [ ];
        return view('backend.admin.edit-profile', $data);
    }
    public function ShowUserlist(){
        $data = [ ];
        $data['users'] = User::with('user_role')->get();
        return view('backend.admin.index', $data);
    }
}
