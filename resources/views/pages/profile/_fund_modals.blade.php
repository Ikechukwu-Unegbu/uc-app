
<!-- Modal -->
<div class="modal fade" id="fund" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fund</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('profile.fund')}}" method="post">
          @csrf 
          <div class="form-group mt-3">
            <label for="" class="form-label">Amount</label>
            <input type="text" name="amount" class="form-control">
          </div>
          <!-- <div class="form-group mt-3">
            <label for="" class="form-label"></label>
          </div> -->
          <div class="form-group">

          </div>
        </form>
        <div class="mt-4">
          <ul class="list-group">
            @foreach($adds as $ad)
            <li class="list-group-item">{{$ad->coin_abb}} | {{$ad->addrs}}</li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>