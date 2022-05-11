@extends('layouts.dashboard')

@section('head')

@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div class="container" style="min-height: 100vh;">

  <table class="table">
    <thead>
      <h2 class="text-center">Offer Table</h2>
      <div class="">
        <button type="button" class="btn btn-primary btn-sm">Small button</button>
      </div>
    </thead>
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>
        <th scope="col">no. of views</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach($offers as $offer)
      <tr>
        <th scope="row">{{$offer->id}}</th>
        <td>{{$offer->name}}</td>
        <td>nill</td>
        <td>
          <a href="" t class="btn btn-primary btn-sm">Small button</a>
          <a href="" t class="btn btn-secondary btn-sm">Small button</a>
          <a href="" t class="btn btn-secondary btn-sm">Small button</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection 