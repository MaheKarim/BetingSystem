@extends('backend.layout')

@section('title')
    Team Create
@endsection
@section('maincontent')
<section class="py-50 height-100vh">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center pb-3">
                    <h4 class="text-capitalize  py-2 bg-primary">Team Setup</h4>
                      <!-- Notification Start -->
                                    @if (session()->has('success'))
                                       <div class="alert alert-success">
                                           {{ session()->get('success') }}
                                       </div>
                                    @endif
                      <!-- Notification End -->

                </div>
                <div class="col-lg-6 mx-auto">
                    <form method="POST" action="{{ url('create-team') }}">
                        @csrf
                        <span>Select Team Name <span class="text-red">*</span></span>
                        <input type="text" class="form-control my-2" name="team_name" id="team_name" placeholder="Team Name">
                        <button type="submit" class="form-control my-3">Create Team</button>
                    </form>
                </div>

                    <div class="col-lg-12 text-center pb-3">
                        <h4 class="text-capitalize  py-2 bg-info">Team Table</h4>


                        <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Team Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                @foreach ($teamSetups as $teamsetup)
                                <tbody>
                                <tr>
                                    <td>{{ $teamsetup->team_name }}</td>
                                    <td>  <a href="{{ route('delete_team', $teamsetup->id) }}" type="button" class="btn btn-danger btn-sm  mr-2">Delete</a ></td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>


                    </div>
            </div>
        </div>
    </section>
@endsection


