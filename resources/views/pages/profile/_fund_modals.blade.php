
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
            <b class="text-center text-dark">
              Copy one of the address below and send USD equivalent of the entered amount to it.
            </b>
          </div>
          <div class="form-group mt-3">
            <label for="" class="form-label">Amount(USD)</label>
            <input type="text" placeholder="100" name="amount" class="form-control">
          </div>
          <!-- <div class="form-group mt-3">
            <label for="" class="form-label"></label>
          </div> -->
          <div class="form-group mt-4 mb-4">
            <button class="btn" style="background-color: #f7921a; color:white; float:right">Send</button>
          </div>
        </form>
        <br>
        <div class="mt-4">
          <ul class="list-group mt-5">
            @foreach($adds as $ad)
            <li class="list-group-item">{{$ad->coin_abb}} | {{$ad->addrs}}</li>
            @endforeach
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>