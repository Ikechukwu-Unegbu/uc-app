@extends('layouts.dashboard')

@section('head')
<style>
  footer{
    display: block;
    bottom: 0;
  }
</style>
@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div style="width: 100%; min-height:100vh; display:block;" class="container" style="min-height: 100vh;">

  <table class="table">
    <thead class="mb-4">
      <h2 class="text-center">Offer Table</h2>
      <div class="mt-4 mb-4">
        <button style="float: right;" type="button" class="btn btn-primary btn-sm" class="btn btn-primary" data-toggle="modal" data-target="#new-offer">New Offer</button>
      </div>
      @include('partials._message')
    </thead>
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>
        <th scope="col">Address</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach($adds as $add)
      <tr>
        <th scope="row">{{$add->id}}</th>
        <td>{{$add->coin_abb}}</td>
        <td>{{$add->addrs}}</td>
        <td>
          <button  data-toggle="modal" data-target="#edit-{{$add->id}}" class="btn btn-primary btn-sm">Edit</button>
          <a href="{{route('admin.address.delete', [$add->id])}}" class="btn btn-secondary btn-sm">Delete</a>
          <!-- <a href="" t class="btn btn-secondary btn-sm">Small button</a> -->
        </td>
      </tr>
      @include('dashboard\address\_edit_address')
      @endforeach
    </tbody>
  </table>

  <div class="modal fade" id="new-offer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Wallet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('admin.address.new')}}" enctype="multipart/form-data" method="POST">
           
          @csrf 

          <div class="form-grou mt-3">
            <label for="" class="form-label">Coin Abbreviation</label>
            <input type="text" name="coin_abb" class="form-control">
          </div>
          <div class="form-grou mt-3">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" class="form-control">
          </div>
          </div>
          <div class="form-group mt-3">
            <button style="float: right;" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
</div>

<!-- modal -->

<!-- Modal -->

@endsection 