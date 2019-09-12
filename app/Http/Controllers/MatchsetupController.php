<?php

namespace App\Http\Controllers;

use App\Matchsetup;
use Illuminate\Http\Request;

class MatchsetupController extends Controller
{
    public function index(){
        $data = [];
        $data['matchsetups'] = Matchsetup::all();
         return view('backend.admin.match_format',$data);
    }

    public function store(Request $request){

        $matchsetup = new Matchsetup();
        $matchsetup->format_type = $request->format_type;
        $matchsetup->over = $request->over;
        $matchsetup->save();
        session()->flash('success', 'Match Format Create Successfully!');

        return redirect(route('matchsetupindex'));
    }

    public function show($id){
       $data = [];
       $data['matchsetups'] = Matchsetup::all();

       return view('admin.match_format',$data);
       //return view('backend.admin.match_format');
    }
    public function delete($id){
        Matchsetup::find($id)->delete();
        session()->flash('success', 'Match Format Delete Successfully!');
        return redirect(route('matchsetupindex'));
    }
}
