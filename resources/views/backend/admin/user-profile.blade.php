@extends('backend.layout')

@section('titie')
    User profile
@endsection

@section('maincontent')
<section class="py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-primary text-center">
                <h2>User Profile</h2>
            </div>
            <div class="col-lg-6 mt-5 mx-auto shadow p-4">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="list-inline">
                            <li class="my-1">Name</li>
                            <li class="my-1">Phone Number</li>
                            <li class="my-1">Address</li>
                            <li class="my-1">Email</li>
                        </ul>

                    </div>

                    <div class="col-lg-8">
                        <ul class="list-inline">
                        <li class="my-1">{{ Auth::user()->name }}</li>
                        <li class="my-1">{{ Auth::user()->phn_number }}</li>
                            <li class="my-1">Address</li>
                        <li class="my-1">{{ Auth::user()->email }}</li>
                        <li class=""><a href="" class="btn btn-primary mt-3">Edit Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
