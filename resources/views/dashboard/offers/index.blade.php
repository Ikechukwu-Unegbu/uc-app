@extends('layouts.dashboard')

@section('head')

@endsection 

@section('content')
@include('dashboard\partials\_top_searchbar')
<div class="container" style="min-height: 100vh;">

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

<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="new-offer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Offer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('admin.offers.new')}}" enctype="multipart/form-data" method="POST">
           
          @csrf 

          <div class="form-grou mt-3">
            <label for="" class="form-label">Package Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-grou mt-3">
            <label for="" class="form-label">Package Caption</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-grou mt-3">
            <label for="" class="form-label">Package Interest</label>
            <input type="text" name="interest" class="form-control">
          </div>
          <div class="form-grou mt-3">
            <label for="" class="form-label">Package Description</label>
            <!-- <input type="text" name="description" class="form-control"> -->
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-grou mt-3">
          <div class="input-group mb-3">
            <!-- <label for="" class="form-label">Add image</label> -->
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          </div>
          <div class="form-group mt-3">
            <button style="float: right;" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection 