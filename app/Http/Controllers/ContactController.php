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
    public function store(Request $request){
       $contacts = new Contact();
       $contacts->username = $request->username;
       $contacts->mail     = $request->mail;
       $contacts->phn_number = $request->phn_number;
       $contacts->message  = $contacts->message;
       $contacts->save();

       session()->flash('success', 'Contact Message Sent Successfully!');

       return redirect(route('contactFrontEnd'));
    }
}
