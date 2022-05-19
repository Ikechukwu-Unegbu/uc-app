@extends('layouts.userprofile')

@section('head')
<link rel="stylesheet" href="{{asset('css\custom-css\profile.css')}}">
<link rel="stylesheet" href="{{asset('css\custom-css\withdraw.css')}}">
<style>
  .wallet-list{
    display:flex;
    flex-direction: row;
    grid-gap: 1.4rem;
  }
</style>
@endsection

@section('content')

  <div class="container withdraw-container">
    <div class="withdraw">
      <div class="withdraw-left">
      <button type="button" class="btn btn-primary mt-4 mb-4" data-toggle="modal" data-target="#exampleModal">
        Add New Withdrawal Address
      </button>
      @include('partials._message')

        <!-- user wallet list -->
        <ul class="list-group">
          @foreach($adds as $add)
            <li class="list-group-item wallet-list">
              <div class="">{{$add->coin_abb}}</div>
              <div class="">{{$add->wallet_add}}</div>
            </li>
          @endforeach
        </ul>

      </div>
      <div class="withdraw-right">
          <form action="" class="form">
            <div class="form-group mt-3">
              <label for="" class="form-label">Amount</label>
              <input type="text" placeholder="$100" name="amount" class="form-control">
            </div>
            <div class="form-group mt-3">
              <label for="" class="form-label">Pick Address</label>
              <select name="address" class="form-control form-select" aria-label="Default select example">
                <option selected>Select Wallet</option>
                @foreach($adds as $add)
                <option value="{{$add->wallet_add}}">{{$add->coin_abb}} | {{$add->wallet_add}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <button class="btn btn-sm">Send</button>
            </div>
          </form>
      </div>
    </div>
  </div>


@include('pages\fund\_modals')
@endsection