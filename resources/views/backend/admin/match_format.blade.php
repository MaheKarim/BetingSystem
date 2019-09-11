@extends('backend.layout')
@section('title')
   Match Setup
@endsection


@section('maincontent')
    <div class="col-lg-12 text-center pb-3">
        <h4 class="text-capitalize  py-2 bg-primary">Match Format Setup</h4>
    </div>
    <div class="col-lg-6 mx-auto">
        <form action="">
            <span>Select Format Name <span class="text-red">*</span></span>
            <input type="text" class="form-control my-2" placeholder="Format Type">
            <input type="text" class="form-control my-2" placeholder="Over">
            <button type="submit" class="form-control my-3">Create</button>
        </form>
    </div>
    <hr>
    <div class="col-lg-12 text-center pb-3">
            <h4 class="text-capitalize  py-2 bg-info">Match Format List / Action</h4>
        </div>
@endsection
