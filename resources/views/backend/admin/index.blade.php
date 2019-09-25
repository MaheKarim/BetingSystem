@extends('backend.layout')

@section('title')
      Admin - HomePage
@endsection

@section('maincontent')
     <h1 align="center">Welcome TO Beting Site </h1>




     <div class="card">
        <div class="card-header">
          Hola! <b> {{ Auth::user()->name }}  </b>
        </div>
        <div class="card-body">
          <h5 class="card-title">You are our Great, {{ Auth::user()->userType->user_role }} </h5>
          <p class="card-text">
            Your mail: {{ Auth::user()->email }} <br>
          </p>
          <a href="{{ route('passChange') }}" class="btn btn-danger">Change Password</a>
        </div>
      </div>
@endsection
