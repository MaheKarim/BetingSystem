@extends('frontend.layout')

@section('frontEndContent')
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
           <h3> {{ $fullmatchsetup->teamName->team_name }} vs {{ $fullmatchsetup->teamName2->team_name }} </h3>
           <p>Time:  {{ $fullmatchsetup->begin }}</p>
           <p>Match Type:  {{ $fullmatchsetup->matchFormat->format_type }}</p>
           <p>Extra Deduction:  {{ $fullmatchsetup->extra_deduction }}</p>
      </div>
    </div>
    <div class="col-md-6 position-static p-4 pl-md-0">
      <h5 class="mt-0 text-center">Team Info</h5>

      <p class="font-weight-bolder"> Bounce Team: {{ $fullmatchsetup->teamName->team_name }}</p>
      <p class="font-weight-bolder"> Net Team: {{ $fullmatchsetup->teamName2->team_name }}</p>
      {{-- <a href="#" class="btn btn-primary btn-sm">Edit</a> --}}
       |
    <a href="{{ route('joinMatch', $fullmatchsetup->id) }}" class="btn btn-danger btn-sm mr-0">Join</a>
    </div>
    @endforeach

</div>
    
@endsection