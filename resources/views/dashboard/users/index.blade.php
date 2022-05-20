@extends('layouts.dashboard')

@section('head')

@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div class="container" style="min-height: 100vh;">

  <table class="table">
    <thead>
      <h2 class="text-center">User Table ({{$total}})</h2>
    </thead>
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
          <a href="{{route('panel.user.profile', [$user->name, $user->id])}}" t class="btn btn-primary btn-sm">view</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection 