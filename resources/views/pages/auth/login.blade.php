@extends('layouts.public')

@section('head')
<style>
  .btn-custom {
    background-color: grey;
    color: white;
  }
  .container{
    margin-top: 8rem;
  }
</style>
@endsection

@section('content')
  <div class="container custom-container">
    <form action="{{route('login')}}" method="POST" class="form mb-5">
      @csrf 
      <div class="form-group mt-4">
        <h3 class="text-center">Log into Your BitFonix Account</h3>
      </div>
      @include('partials._settings_message')
   
      <div class="form-group mt-4">
        <label for="" class="form-label">Email</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group mt-4">
        <label for="" class="form-label">Password</label>
        <input type="text" name="password" class="form-control">
      </div>
     
      <div class="form-group mt-4">
        <button style="float: right;" class="btn btn-custom btn-primary">Login</button>
      </div>
    </form>
  </div>      
@endsection