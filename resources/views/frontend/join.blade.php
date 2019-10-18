@extends('frontend.layout')

@section('frontEndContent')
<div class="container">
    <div class="row">
     <div class="col-lg-12 text-center pb-3">
       <h4 class="text-capitalize  py-2 bg-info text-white">User List</h4>
     </div>
    </div>
  </div>
  <table class="table">
   <thead>
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Name</th>
       <th scope="col">PHN Number</th>
       <th scope="col">Balance</th>
       <th scope="col"> Role </th>
       <th scope="col"> Action </th>
     </tr>
   </thead>
   <tbody>
     {{-- @foreach ($users as $user) --}}
     <tr>
     <th scope="row">hhh</th>
     <td>77777777777776</td>
     <td>r77777777777777</td>
     <td>t</td>
     <td>UserR</td>
     <td> <a href="
       " type="button" class="btn btn-danger text-white">Edit Balance</a> </td>
     </tr> 
     {{-- @endforeach --}}
   </tbody>
 </table>
@endsection