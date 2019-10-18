<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FullMatchSetup;
use App\JoinMatch;
use Auth;
use App\User;

class JoinMatchController extends Controller
{

   public function index(){

    $data = [];
    $data['fullmatchsetups'] = FullMatchSetup::all();

    return \view('frontend.join', $data);
   }

   public function join($id)
   {
       $match_info = FullMatchSetup::find($id);
       return \view('frontend.joinMatch', compact('match_info'));
   }

   // form submit
   public function join_match_form_submit(Request $request)
   {
       $request->validate([
            'match_id' => 'required',
            'team_id' => 'required',
       ]);
       if(!auth::check()){
           return back()->with('success', "Sorry! Your are not loged in. Please log in first");
       }
       $match_info = FullMatchSetup::find($request->match_id);

       if($request->team_id == $match_info->bounce_team){
            if(auth::user()->balance < $match_info->bounce_rate){
                return back()->with('success', "Sorry! You do not have sufficiant balance to join this match");
            }
            User::find(auth::id())->update([
                'balance' => auth::user()->balance - $match_info->bounce_rate
            ]);
       }else{
            if(auth::user()->balance < $match_info->net_rate){
                return back()->with('success', "Sorry! You do not have sufficiant balance to join this match");
            }
            User::find(auth::id())->update([
                'balance' => auth::user()->balance - $match_info->net_rate
            ]);
       }
       
       JoinMatch::create([
            'full_match_setup_id' => $match_info->id,
            'team_id' => $request->team_id,
            'user_id' => auth::id()
       ]);
       
       return back()->with('success', "Congrats! You have successfully enrolled to this match");
   }
}
   
