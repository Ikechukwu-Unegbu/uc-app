@extends('layouts.dashboard')

@section('head')

@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div class="container" style="min-height: 100vh;">

  <!-- table starts -->

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Username</th>
      <th scope="col">Amount</th>
      <th scope="col">Balance</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
   @foreach($requests as $req)
   <tr>
      <th scope="row">{{$req->id}}</th>
      <td><a href="{{route('panel.user.profile', [$req->user->name, $req->user->id])}}">{{$req->user->name}}</a></td>
      <td>{{$req->amount}}</td>
      <td>{{$req->user->wallet->balace}}</td>
      <td>{{$req->add}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection 