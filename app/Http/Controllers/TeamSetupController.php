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
        $data = [];
        $data['teamSetups'] = TeamSetup::all();

       // $data['teamSetups'] = TeamSetup::find($TeamSetupId);

        return view('/backend.teamsetupmain', $data);
    }


    public function create()
    {
         // create team name
        $data = [];
       // $data['teamSetups'] = TeamSetup::find($teamSetup);
        return view('/backend.teamsetupmain', $data);
    }


    public function store(Request $request)
    {
        $teamSetup = new TeamSetup();
        $teamSetup->team_name = $request->team_name;
        $teamSetup->save();

        session()->flash('success', 'Team Create Successfully!');

        return redirect('/team-setup-main');

    }

    public function show($id)
    {
       // die(var_dump($teamSetupid));
       // dd($teamSetups);
        //$teamsetups = TeamSetup::find($id);
        // $data['teamSetup'] = TeamSetup::all();

        $teamSetups = TeamSetup::all();

        return view('/backend.teamsetupmain', compact('teamSetups'));
    }


    public function edit(TeamSetup $teamSetup)
    {
        //
    }


    public function update(Request $request, TeamSetup $teamSetup)
    {
        //
    }


    public function deletekor($id)
    {

        TeamSetup::find($id)->delete();
         //return $id;
         session()->flash('success', 'Team Delete Successfully!');

        return redirect(route('teamindexpage'));

    }
}
