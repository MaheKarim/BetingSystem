@extends('backend.layout')

@section('title')
   Payment Controller
@endsection

  @section('maincontent')
      
      <div class="col-lg-12 text-center pb-3">
            <h4 class="text-capitalize  py-2 bg-danger text-white">Payment Setup</h4>
      </div>    
        <!-- Notification Start -->
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
     @endif
    <!-- Notification End -->
      <div class="col-lg-8 mx-auto text-center">
      <form method="POST" action="{{ url('paymentSaveReq') }}">
                @csrf
                    <div class="form-group">
                      <label for="payment_method">Payment Type</label>
                      <input type="text" class="form-control" name="payment_method"  placeholder="bKash/Rocket/Nagad/Card Name">
                    </div>

                    <div class="form-group">
                      <label for="agent_phn_number">Agent PHN Number</label>
                      <input type="text" class="form-control" name="agent_phn_number" placeholder="Agent Phn Number: 01778966356">
                    </div>

                    <div class="form-group">
                            <label for="payment_method_type">Payment Method Type</label>
                            <input type="text" class="form-control" name="payment_method_type" placeholder="Personal / Agent">
                          </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <!-- End Form Here -->
                        <br> <br>
      </div>

  
            <div class="col-lg-12 text-center pb-3">
                    <h4 class="text-capitalize  py-2 bg-info text-white">Payment Setup Details</h4>

                    <br>
                    <hr>
                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Payment Type</th>
                                <th scope="col">PHN / Card Number</th>
                                <th scope="col">Payment Method Type</th>
                                <th scope="col">Action </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($agentspayments as $agentpayment)
                                    
                              
                              <tr>
                                <th scope="row">1</th>
                              <td>{{ $agentpayment->payment_method }}</td>
                              <td>{{ $agentpayment->agent_phn_number }}</td>
                              <td>{{ $agentpayment->payment_method_type }}</td>
                              <td><a href="{{ route('delete_payment', $agentpayment->id)}}" type="button" class="btn btn-warning">Warning</a> </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
              </div>  
  @endsection