<?php

namespace App\Http\Controllers;

use App\TeamSetup;
use Illuminate\Http\Request;

class TeamSetupController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
      //  $this->middleware(['auth'=> 'verified']);

    }
    public function index()
    {
        $data = [];
        $data['teamSetups'] = TeamSetup::all();



        return view('/backend.admin.teamsetupmain', $data);
    }


    public function create()
    {

        $data = [];

        return view('/backend.admin.teamsetupmain', $data);
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
        $teamSetups = TeamSetup::all();

        return view('/backend.admin.teamsetupmain', compact('teamSetups'));
    }

    public function deletekor($id)
    {

        TeamSetup::find($id)->delete();
         session()->flash('success', 'Team Delete Successfully!');

        return redirect(route('teamindexpage'));

    }
}
