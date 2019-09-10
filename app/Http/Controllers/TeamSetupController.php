<?php

namespace App\Http\Controllers;

use App\TeamSetup;
use Illuminate\Http\Request;

class TeamSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
      //  $this->middleware(['auth'=> 'verified']);

    }
    public function index()
    {
        //
        return view('backend.team-setup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // create team name

        $data = [];
       // $data['teamSetups'] = TeamSetup::find($teamSetup);
        return view('backend.team-setup', $data);

    }


    public function store(Request $request)
    {
        $teamSetup = new TeamSetup();
        $teamSetup->team_name = $request->team_name;
        $teamSetup->save();

        session()->flash('success', 'Team Create Successfully!');
        return redirect('/team-setup');

    }

    public function show($teamSetupid)
    {
       // die(var_dump($teamSetupid));
       // dd($teamSetups);
        $data = [];
        $data['teamSetups'] = TeamSetup::find($teamSetupid);
       // $data['teamSetup'] = TeamSetup::all();


        return view('backend.team-setup', $data);
    }


    public function edit(TeamSetup $teamSetup)
    {
        //
    }


    public function update(Request $request, TeamSetup $teamSetup)
    {
        //
    }


    public function destroy(TeamSetup $teamSetup)
    {
        //
    }
}
