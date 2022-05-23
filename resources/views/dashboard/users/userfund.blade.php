@extends('layouts.dashboard')

@section('head')

@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div class="container" style="min-height: 100vh;">

  <table class="table">
    <thead>
      <h2 class="text-center">User Funding Table</h2>
    </thead>
    <thead>
        @include('partials._message')
    </thead>
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">amount</th>
        <th scope="col">time</th>
        <th scope="col">user</th>
        <th scope="col">status</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach($funds as $fund)
      <tr>
        <th scope="row">{{$fund->id}}</th>
        <td>{{$fund->amount}}</td>
        <td>{{$fund->created_at}}</td>
        <td>{{$fund->user->name}}</td>
        <td>@if($fund->process == 0) Not verified @else verified @endif</td>
        <td>
            <a href="{{route('addfund', [$fund->user->id, $fund->amount,$fund->id])}}" class="btn">Verify</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection 