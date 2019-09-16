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
    @foreach ($fullmatchsetups as $fullmatchsetup)
    <div class="col-md-6 mb-md-0 p-md-4">
      <div class="w-100" alt="">
        <h5 class="mt-0 text-center">Today Team</h5>
           <h3> {{ $fullmatchsetup->team_1 }} vs {{ $fullmatchsetup->team_2 }} </h3>
           <p>Time:{{ $fullmatchsetup->begin }}</p>
           <p>Match Type:{{ $fullmatchsetup->match_type }}</p>
           <p>Extra Deduction: {{ $fullmatchsetup->extra_deduction }}</p>

      </div>
    </div>
    <div class="col-md-6 position-static p-4 pl-md-0">
      <h5 class="mt-0 text-center">Team Info</h5>

      <p class="font-weight-bolder"> Bounce Team Money: {{ $fullmatchsetup->bounce_team }}</p>
      <p class="font-weight-bolder"> Net Team Money: {{ $fullmatchsetup->net_team }}</p>
      <a href="#" class="btn btn-primary btn-sm">Edit</a>
       |
      <a href="#" class="btn btn-danger btn-sm mr-0">Delete</a>
    </div>
    @endforeach

  </div>
@endsection

