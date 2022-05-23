@extends('layouts.userprofile')

@section('head')
<link rel="stylesheet" href="{{asset('css\custom-css\profile.css')}}">
@endsection

@section('content')

  @include('pages.profile._more')
  <div class="container">
    <hr>
    @include('partials._message')
  </div>
  @include('pages.profile._offers')
  @include('pages.profile._fund_modals')
@endsection