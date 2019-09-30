@extends('backend.layout')

@section('title')
    Info | Update
@endsection

@section('maincontent')

<section class="py-50 height-100vh">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center pb-3">
                <h4 class="text-capitalize  py-2 bg-primary">Profile Update</h4>
            </div>

            <!-- Notification Start -->
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
           <!-- Notification End -->

            <div class="col-lg-8 mx-auto">
            <form action="{{ route('update-profile') }}" method="post">
                    @csrf
                        <div class="form-group">
                          <label for="email">Profile</label>
                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" >
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
</section>

@endsection