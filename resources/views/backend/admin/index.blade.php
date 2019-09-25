@extends('backend.layout')

@section('title')
      Admin - HomePage
@endsection

@section('maincontent')
     <h1 align="center">Welcome TO Beting Site </h1>
     Your Name:  {{ Auth::user()->name }}  <br>
     Your mail: {{ Auth::user()->email }} <br>
     You are : {{ Auth::user()->userType->user_role }}
@endsection
