@extends('backend.layout')

@section('title')
    Admin | Contact
@endsection

@section('maincontent')
<table class="table">
        <thead>
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Mail</th>
            <th scope="col">PHN Number</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($contacts as $contact)
        <tbody>
                <tr>
                  <th scope="row">{{ $contact->username }}</th>
                  <td>{{ $contact->mail }}</td>
                  <td>{{ $contact->phn_number }}</td>
                  <td>{{ $contact->message }}</td>
                  <td><a href="{{ route('delete_contact', $contact->id) }}" class="btn btn-warning" type="button">Delete</a></td>
                </tr>
              </tbody>
        @endforeach
      </table>
@endsection

