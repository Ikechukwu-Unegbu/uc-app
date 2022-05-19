@extends('layouts.userprofile')

@section('head')
<link rel="stylesheet" href="{{asset('css\custom-css\profile.css')}}">
<link rel="stylesheet" href="{{asset('css\custom-css\withdraw.css')}}">

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
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
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
              <select class="form-control form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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