<!-- view modal -->
<div class="modal fade" id="view-{{$offer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$offer->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('BlogPhotos/'.$offer->img) }}" class="card-img img-fluid" alt="">
                <div class=" mt-3">
                    <p class="text-center text-dark"><b>{{$offer->title}}</b></p>
                    <p class="text-center text-dark"><b>{{$offer->name}}</b></p>
                </div>
                <div class="mt-3">
                    {{$offer->description}}
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- delete modal -->
<div class="modal fade" id="delete-{{$offer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$offer->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
            <b>Are You sure you want to delete {{$offer->name}}?</b>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{route('admin.offers.delete', [$offer->id])}}" class="btn btn-primary">Yes continue</a>
      </div>
    </div>
  </div>
</div>