<div class="modal fade" id="delete-{{$add->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <b>Are you sure you want to delete your {{$add->coin_abb}} wallet?</b>
        <p>Note that any withdrawal request made with this address will continue unless separately cancelled by you.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="{{route('delete.wallet', [$add->id])}}" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>