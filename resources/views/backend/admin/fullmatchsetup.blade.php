@extends('backend.layout')

@section('title')
     Full Match Setup
@endsection

@section('maincontent')
    <section class="py-50 height-100vh">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center pb-3">
                    <h4 class="text-capitalize  py-2 bg-primary">Matches Setup</h4>
                </div>
                <!-- Notification Start -->
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
            @endif
            <!-- Notification End -->
                <div class="col-lg-8 mx-auto">
                    <form action="{{ route('fullmatchsetup.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-inline">
                                    <li class="my-4">Team's Name</li>
                                    <li class="my-4">Date :</li>
                                    <li class="my-4">Local Time :</li>
                                    <li class="my-4">GMT Time :</li>
                                    <li class="my-4">Matches Type :</li>
                                    <li class="my-4">Net Rate :</li>
                                    <li class="my-4">Bounce Rate :</li>
                                    <li class="my-4">Extra Deduction :</li>
                                    <li class="my-4">Note / Remarks :</li>
                                </ul>
                            </div>
                            <div class="col-lg-8">
                                <ul class="list-inline">
                                    <li class="my-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-10">

                                                        <select name="team_1" id="" class="form-control">

                                                            @foreach($teamSetups as $teamsetup)
                                                            <option value="{{$teamsetup->id}}">{{ $teamsetup->team_name }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="col-2 align-self-center">
                                                        <input type="checkbox" name="" id="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <select name="team_2" id="" class="form-control">
                                                            @foreach($teamSetups as $teamsetup)
                                                                <option value="{{$teamsetup->id}}">{{ $teamsetup->team_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-2 align-self-center">
                                                        <input type="checkbox" name="" id="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="my-2">
                                        <input type="date" class="form-control" name="begin">
                                    </li>
                                    <li class="my-2">
                                        <input type="time" class="form-control" name="local_time">
                                    </li>
                                    <li class="my-2">
                                        <input type="time" class="form-control" name="gmt_time">
                                    </li>
                                    <li class="my-2">
                                        <select name="match_type" id="" class="form-control w-25">
                                            @foreach($matchsetups as $matchsetup)
                                                <option value="{{ $matchsetup->id }}">{{ $matchsetup->format_type }}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li class="my-2">
                                        <input type="number" class="form-control" name="net_rate">
                                    </li>
                                    <li class="my-2">
                                        <input type="number" class="form-control" name="bounce_rate">
                                    </li>
                                    <li class="my-2">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" name="extra_deduction">
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <select name="bounce_1" id="" class="form-control">
                                                            @foreach($teamSetups as $teamsetup)
                                                                <option value="{{$teamsetup->id}}">{{ $teamsetup->team_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-3 align-self-center">
                                                        <input type="checkbox" name="bounce_team" id="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <select name="bounce_2" id="" class="form-control">
                                                            @foreach($teamSetups as $teamsetup)
                                                                <option value="{{$teamsetup->id}}">{{ $teamsetup->team_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-3 align-self-center">
                                                        <input type="checkbox" name="net_team" id="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="my-2">
                                        <textarea name="note" id="" cols="10" rows="2" class="form-control"></textarea>
                                    </li>
                                    <li class="my-3">
                                        <button type="submit" class="form-control btn btn-primary">Create</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
