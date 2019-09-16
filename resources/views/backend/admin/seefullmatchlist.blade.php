@extends('backend.layout')

@section('title')
    Match List
@endsection

@section('maincontent')
                       <!-- Notification Start -->
                       @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                       @endif
                       <!-- Notification End -->


<div class="row no-gutters bg-light position-relative">
    <div class="col-md-6 mb-md-0 p-md-4">
      <div class="w-100" alt="">
        <h5 class="mt-0 text-center">Today Team</h5>
           <h3> Dhaka vs CTG </h3>
           
      </div>
    </div>
    <div class="col-md-6 position-static p-4 pl-md-0">
      <h5 class="mt-0">Columns with stretched link</h5>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <a href="#" class="btn btn-primary btn-sm">Edit</a>
       |
      <a href="#" class="btn btn-danger btn-sm mr-0">Delete</a>


    </div>
  </div>
@endsection

