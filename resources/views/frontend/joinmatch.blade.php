@extends('frontend.layout')

@section('title')
    Choose & Join Match
@endsection

@section('frontEndContent')



@if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                       @endif
      <div class="container py-5 mb-5">
        <form method="POST" action="{{ route('join_match_form_submit') }}">
            @csrf
            <input type="hidden" value="{{ $match_info->id }}" name="match_id">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Your Team</label>
                <select class="form-control" name="team_id" id="exampleFormControlSelect1">
                    <option value="{{ $match_info->teamName->id }}">{{ $match_info->teamName->team_name }} - {{ ($match_info->net_team == $match_info->team_1) ? "Net Team" : "Bounce Team" }} </option>
                    <option value="{{ $match_info->teamName2->id }}">{{ $match_info->teamName2->team_name }} - {{ ($match_info->net_team == $match_info->team_2) ? "Net Team" : "Bounce Team" }} </option>
                </select>
            </div>
            

            <button class="form-control" type="submit">Submit</button>
            
          </form>
    
      </div>
    
@endsection