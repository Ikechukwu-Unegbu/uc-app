@extends('layouts.dashboard')

@section('head')

@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div class="container" style="min-height: 100vh;">
  <h3 class="text-center text-dark">User Profile</h3>
  <div class="container">
    <div class="">
      <button class="btn btn-primary">Top Up User</button>
      <button class="btn btn-danger">Block User</button>
    </div>
    <div class="">
      <span><b>Username:</b></span>
      <span><p>{{$user->name}}</p></span>
    </div>
  </div>
  <div class="container">
    <div class="">
      <span><b>Firstname:</b></span>
      <span><p>{{$user->firstname}}</p></span>
    </div>
  </div>
  <div class="container">
    <div class="">
      <span><b>Lastname:</b></span>
      <span><p>{{$user->lastname}}</p></span>
    </div>
  </div>
  <div class="container">
    <div class="">
      <span><b>Email:</b></span>
      <span><p>{{$user->email}}</p></span>
    </div>
  </div>
  <div class="container">
    <div class="">
      <span><b>Nationality:</b></span>
      <span><p>{{$user->country}}</p></span>
    </div>
  </div>
  <div class="container">
    <div class="">
      <span><b>Gender:</b></span>
      <span><p>{{$user->gender}}</p></span>
    </div>
  </div>
  <div class="container">
    <div class="">
      <span><b>Birthday:</b></span>
      <span><p>{{$user->birthday}}</p></span>
    </div>
  </div>
  <div class="container">
    <div class="">
      <span><b>Balance:</b></span>
      <span><p>${{$user->wallet->balace}}</p></span>
    </div>
  </div>
</div>
@endsection 