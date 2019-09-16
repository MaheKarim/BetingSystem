<?php

namespace App\Http\Controllers;

use App\FullMatchSetup;
use App\Matchsetup;
use Illuminate\Http\Request;
use App\TeamSetup;

class FullMatchSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $data = [];
     $data['fullmatchsetups'] = FullMatchSetup::all();

     return view('backend.admin.seefullmatchlist', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['teamSetups'] = TeamSetup::all();
        $data['matchsetups'] = Matchsetup::all();
        session()->get('success','Match Format Create Successfully!');

        return view('backend.admin.fullmatchsetup',$data);

    }


    public function store(Request $request)
    {
        $fullmatchsetups = new FullMatchSetup();
        $fullmatchsetups->team_1 = $request->team_1;
        $fullmatchsetups->team_2 = $request->team_2;
        $fullmatchsetups->local_time = $request->local_time;
        $fullmatchsetups->gmt_time = $request->gmt_time;
        $fullmatchsetups->match_type = $request->match_type;
        $fullmatchsetups->net_rate = $request->net_rate;
        $fullmatchsetups->bounce_rate = $request->bounce_rate;
        $fullmatchsetups->extra_deduction = $request->extra_deduction;
        $fullmatchsetups->note = $request->note;
        $fullmatchsetups->save();

        session()->get('success','Match Format Create Successfully!');

        return redirect()->route('fullmatchsetup.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FullMatchSetup  $fullMatchSetup
     * @return \Illuminate\Http\Response
     */
    public function show(FullMatchSetup $fullMatchSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FullMatchSetup  $fullMatchSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(FullMatchSetup $fullMatchSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FullMatchSetup  $fullMatchSetup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FullMatchSetup $fullMatchSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FullMatchSetup  $fullMatchSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(FullMatchSetup $fullMatchSetup)
    {
        //
    }
}
