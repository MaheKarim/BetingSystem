<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        return view('frontend.contact');
    }
    public function contactlist(){
        return view('backend.admin.contact');
    }
}
