@extends('layouts.dashboard')

@section('head')

@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div class="container" style="min-height: 100vh;">
  <h3 class="text-center text-dark">User Profile</h3>
  <div class="container">
    <div class="">
      <button class="btn btn-primary" data-toggle="modal" data-target="#top-up">Top Up User</button>
      @if($user->blocked == 1)
      <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Block User</button>
      @else 
      <button class="btn btn-success" data-toggle="modal" data-target="#unblock">Unblock User</button>
      @endif 
    </div>
    <div class="">
      @include('partials._message')
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




<!-- topup modal -->
<div class="modal fade" id="top-up" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('panel.topup', [$user->id])}}" class="form">
          @csrf 
          <div class="form-group">
            <label for="" class="form-label">Amount:</label>
            <input type="text" name="amount" class="form-control">
          </div>
          <div class="form-group">
            <button style="float:right;" class="btn btn-sm">
              Send
            </button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@include('dashboard\users\partials\_blocking_modal')
@include('dashboard\users\partials\_unblocking_modal')
@endsection 