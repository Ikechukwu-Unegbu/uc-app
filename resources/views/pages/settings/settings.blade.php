@extends('layouts.userprofile')

@section('head')

@endsection

@section('content')
<div class="container">
  <div style="margin-top: 5rem;" class=""></div>
  <form action="">
    @csrf 
  
    <div class="form-grop">
      <h2 class="text-center">General</h2>
      <p class="text-center">Update Profile Details</p>
    </div>
    <div class="form-group mt-4">
      <div class="mb-3">
        <label for="formFile" class="form-label">Profile Picture</label>
        <input class="form-control" type="file" id="formFile">
      </div>  
    </div>
    <div class="form-group mt-4">
      <label class="form-label" for="">First Name</label>
      <input type="text" value="" name="firstname" class="form-control">
    </div>
    <div class="form-group mt-4">
      <label for="" class="form-label">Middle Name</label>
      <input type="text" value="" name="midname" class="form-control">
    </div>
    <div class="form-group">
      <label for="" class="form-label">Last Name</label>
      <input type="text" name="lastname" value="" class="form-control">
    </div>
    <div class="form-group mt-4">
      <label for="" class="form-label">Email</label>
      <input type="text" name="email" class="form-control">
    </div>
  </form>
  <!-- end of general settings form -->
  <div style="margin-top: 4rem; margin-bottom:4rem;" class="">
    <hr>
  </div>
  <form action="" method="post">
    <div class="form-group">
      <h3 class="text-center">Reset Password</h3>
    </div>
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
      <button class="btn btn-sm btn-primary">
        Reset
      </button>
    </div>
  </form>
</div>

@endsection