<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchsetupController extends Controller
{
    public function index(){
         return view('backend.admin.match_format');
    }
}
