<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AgentPayment;

class AgentPaymentController extends Controller
{
    // 

    public function index(){
        $data = [ ];
        $data['agentspayments'] = AgentPayment::all();

        return view('backend.admin.payment', $data);
    }
}
