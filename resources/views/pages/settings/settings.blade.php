@extends('layouts.userprofile')

@section('head')

@endsection

@section('content')
<div class="container" style="margin-bottom:5rem;">
  <div style="margin-top: 5rem;" class=""></div>
  <form action="{{route('settings.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-grop">
      <h2 class="text-center">General</h2>
      <p class="text-center">Update Profile Details</p>
    </div>
    @include('partials._settings_message')
    <div class="form-group mt-4">
      <div class="mb-3">
        <label for="formFile" class="form-label">Profile Picture</label>
        <input class="form-control" type="file" name="image" id="formFile">
      </div>  
    </div>
    <div class="form-group mt-4">
      <label class="form-label" for="">First Name</label>
      <input type="text" value="{{$user->firstname}}" name="firstname" class="form-control">
    </div>
    <div class="form-group mt-4">
      <label for="" class="form-label">Middle Name</label>
      <input type="text" value="{{$user->midname}}" name="midname" class="form-control">
    </div>
    <div class="form-group">
      <label for="" class="form-label">Last Name</label>
      <input type="text" name="lastname" value="{{$user->lastname}}" class="form-control">
    </div>
    <div class="form-group mt-4">
      <label for="" class="form-label">Email</label>
      <input type="text" name="email" value="{{$user->email}}" class="form-control">
    </div>
    <div class="form-group mt-4">
      <label for="" class="form-label">Select Gender</label>
      <select name="gender" class="form-select form-control" value="{{$user->avatar}}" aria-label="Default select example">
        <option value="other">Other</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <div class="form-group mt-4">
      <label for="" class="form-label">Country</label>
      <input type="text" name="country" value="{{$user->country}}" class="form-control">
    </div>
    <div class="form-group mt-4 mb-5">
      <!-- <label for="" class="form-label"></label> -->
      <button style="float: right; width:50%; background-color:#f7921a;" class="btn btn-sm btn-primary">Save</button>
    </div>
  </form>
  <!-- end of general settings form -->
  <div style="margin-top: 4rem; margin-bottom:4rem;" class="">
    <hr>
  </div>
  <form style="margin-bottom: 5rem;" action="{{route('password.new')}}" method="post">
    @csrf 
    <div class="form-group">
      <h3 class="text-center">Reset Password</h3>
    </div>
    @include('partials._message')
    <div class="form-group mt-3">
      <label for="" class="form-label">Old Password</label>
      <input type="text" name="old_password" class="form-control">
    </div>
    <div class="form-group mt-3">
      <label for="" class="form-label">New Password</label>
      <input type="text" name="new_password" class="form-control">
    </div>
    <div class="form-group mt-3">
      <label for="" class="form-label">Confirm Password</label>
      <input type="text" name="confirm" class="form-control">
    </div>
    <div class="form-group mt-4">
      <button style="float: right; width:50%; background-color:#f7921a;" class="btn btn-sm btn-primary">
        Reset
      </button>
    </div>
  </form>
</div>
<div style="margin-top: 5rem;" class=""></div>
@include('partials._footer')
@endsection