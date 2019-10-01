@extends('backend.layout')
@section('title')
   Match Setup | Admin Page
@endsection


@section('maincontent')
    <div class="col-lg-12 text-center pb-3">
        <h4 class="text-capitalize  py-2 bg-primary">Match Format Setup</h4>


        <!-- Notification Start -->
        @if (session()->has('success'))
           <div class="alert alert-success">
               {{ session()->get('success') }}
           </div>
        @endif
       <!-- Notification End -->




    </div>
    <div class="col-lg-6 mx-auto">
        <form action="{{ url('create-matchFormat') }}" method="POST">
            @csrf
            <span>Select Format Name <span class="text-red">*</span></span>
            <input type="text" class="form-control my-2" name="format_type" id="format_type" placeholder="Format Type">
            <input type="text" class="form-control my-2" name="over" id="over" placeholder="Over">
            <button type="submit" class="form-control my-3">Create</button>
        </form>
    </div>
    <hr>
    <div class="col-lg-12 text-center pb-3">
            <h4 class="text-capitalize  py-2 bg-info">Match Format List / Action</h4>

            <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Match Format</th>
                        <th scope="col">Over</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    @foreach ($matchsetups as $matchsetup)
                    <tbody>
                    <tr>
                        <td>{{ $matchsetup->format_type }}</td>
                        <td>{{ $matchsetup->over }}</td>
                        <td>  <a href="{{ route('delete_match_format', $matchsetup->id) }}" type="button" class="btn btn-danger btn-sm  mr-2">Delete</a ></td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
@endsection
