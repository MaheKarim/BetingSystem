<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AgentPayment;

class AgentPaymentController extends Controller
{

    public function index(){
        $data = [ ];
        $data['agentspayments'] = AgentPayment::all();
       
        return view('backend.admin.payment', $data);
    }

    // store payment accept info

    public function store(Request $request){
        $agentpayments = new AgentPayment();
        $agentpayments->payment_method = $request->payment_method;
        $agentpayments->agent_phn_number = $request->agent_phn_number;
        $agentpayments->payment_method_type = $request->payment_method_type;
        $agentpayments->save();
        session()->flash('success', 'Payment Method Setup Successfully!');
        return redirect(route('paymentMethodDeclare'));
    }

    public function show(){
        $data = [ ];
        $data['agentspayments'] = AgentPayment::all();

        return view('backend.admin.payment', $data);
    }

    public function delete($id){
        AgentPayment::find($id)->delete();
        session()->flash('success', 'Agent Payment Method Deleted Successfully!');
        return redirect(route('paymentMethodDeclare'));
    }
}
