
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Withdrawal Address</h5>
        <button type="button mt-4" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('add.address')}}" class="form">
          @csrf
          <div class="form-group mt-4">
            <label for="">Coin Initials</label>
            <input type="text" placeholder="e.g BTC" name="coin_initial" class="form-control">
          </div>
          <div class="form-group mt-4">
            <label for="" class="form-label">Wallet Address</label>
            <input type="text" name="address" placeholder="e.g kakfk3aofiaifoaiaiaolalfla" class="form-control">
          </div>
          <div class="form-group mt-4">
            <button style="float:right;" class="btn">Save</button>
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

