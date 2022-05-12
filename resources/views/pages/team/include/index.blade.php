@extends('layouts.public')

@section('head')

@endsection

@section('content')
  @include('pages\team\include\_banner')
  @include('pages\team\include\_full_team')
  @include('pages\team\include\_calltoaction')
  @include('pages\team\include\_client')
  @include('partials._footer')
@endsection 