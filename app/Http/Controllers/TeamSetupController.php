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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamSetup  $teamSetup
     * @return \Illuminate\Http\Response
     */
    public function show(TeamSetup $teamSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamSetup  $teamSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamSetup $teamSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamSetup  $teamSetup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamSetup $teamSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamSetup  $teamSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamSetup $teamSetup)
    {
        //
    }
}
