
<!-- Modal -->
<div class="modal fade" id="edit-{{$add->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit {{$add->coin_abb}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('admin.address.edit', [$add->id])}}" enctype="multipart/form-data" method="POST">
           
           @csrf 
 
           <div class="form-grou mt-3">
             <label for="" class="form-label">Coin Abbreviation</label>
             <input type="text" value="{{$add->coin_abb}}" name="coin_abb" class="form-control">
           </div>
           <div class="form-grou mt-3">
             <label for="" class="form-label">Address</label>
             <input type="text" name="address" value="{{$add->addrs}}" class="form-control">
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