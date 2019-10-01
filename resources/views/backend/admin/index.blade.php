@extends('backend.layout')

@section('title')
      Admin - HomePage
@endsection

@section('maincontent')
     <h1 align="center">Welcome TO Beting Site </h1>

<!-- Notifications Start -->

                     @if (session('error'))
                       <div class="alert alert-danger">
                         {{ session('error') }}
                       </div>
                     @endif
                     @if (session('success'))
                       <div class="alert alert-success">
                         {{ session('success') }}
                       </div>
                     @endif

<!-- Notificatons End -->


     <div class="card">
        <div class="card-header">
          Hola! <b> {{ Auth::user()->name }}  </b>
        </div>
        <div class="card-body">
          <h5 class="card-title">You are our Great, <b> {{ Auth::user()->UserRole->user_role }} </b> </h5>
          <p class="card-text">
            Your mail: {{ Auth::user()->email }} <br>
          </p>
          <a href="{{ route('passChange') }}" class="btn btn-danger">Change Password</a>
        </div>
      </div>
      <br> 
      <hr>


      <!-- Admin Table For User -->
      @admin
           <!-- Table for User details -->
           <div class="container">
             <div class="row">
              <div class="col-lg-12 text-center pb-3">
                <h4 class="text-capitalize  py-2 bg-info text-white">User List</h4>
              </div>
             </div>
           </div>
           <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">PHN Number</th>
                <th scope="col">Balance</th>
                <th scope="col"> Role </th>
                <th scope="col"> Action </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->balance }} BDT</td>
              <td>{{ $user->UserRole->user_role }}</td>
              <td> <a href="
                " type="button" class="btn btn-danger text-white">Edit Balance</a> </td>
              </tr> 
              @endforeach
            </tbody>
          </table>
           <!-- End Table For User Detals -->
           {{ $users->links() }}
      @endadmin
@endsection
