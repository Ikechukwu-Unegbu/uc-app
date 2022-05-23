@extends('layouts.public')
<link rel="stylesheet" href="{{asset('css\custom-css\profile.css')}}">
@section('head')

@endsection

@section('content')
  @include('pages.home.includes._start_slider')
  @include('pages.home.includes._about')
  @include('pages.home.includes._promo')   
  @include('pages.home.includes._whyus')
  @include('pages.home.includes._counter')
  @include('pages.home.includes._service')
  @include('pages.home.includes._team')
  @include('pages.home.includes._pricetable')
  @include('pages.home.includes._process')
  @include('pages.home.includes._promo2')
  @include('pages.home.includes._pricing2')

  @include('pages.home.includes._blog')

  

@endsection