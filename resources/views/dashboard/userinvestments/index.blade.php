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
      <th scope="col">Date</th>
      <th scope="col">Offer Name</th>
    </tr>
  </thead>
  <tbody>
   @foreach($invests as $invest)

   @php 
       $offer = App\Models\Offer::find($invest->offer_id);
   @endphp
   <tr>
      <th scope="row">{{$invest->id}}</th>
      <td><a href="">{{$invest->user->name}}</a></td>
      <td>{{$invest->amount}}</td>
      <td>{{$invest->created_at}}</td>
      <td>{{$offer->name}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection 