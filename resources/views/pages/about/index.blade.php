@extends('layouts.public')

@section('head')

@endsection

@section('content')

  @include('pages\about\include\_about_banner')
  @include('pages\about\include\_aboutpromo')
  @include('pages\about\include\_chooseus')
  @include('pages\about\include\_counter')
  @include('pages\about\include\_pricetable')
  @include('pages\about\include\_team')
  @include('pages\about\include\_calltoaction')
  @include('pages\about\include\_testimonial')
  @include('pages\about\include\_client')
    
    
  
  
  
  

  @include('partials._footer')
@endsection