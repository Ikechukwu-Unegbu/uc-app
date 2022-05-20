@extends('layouts.dashboard')

@section('head')

@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div class="container" style="min-height: 100vh;">
  <h3 class="text-center text-dark">Your Search Result</h3>
  <div class="">
    <ul class="list-group">
      @foreach($results as $result)
      <li class="list-group-item">
        <a href="{{route('panel.user.profile', [$result->name, $result->id])}}">{{$result->name}} {{$result->firstname}} {{$result->lastname}}</a>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection 