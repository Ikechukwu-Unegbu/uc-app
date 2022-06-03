<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$offer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        @if(Auth::check())
        <h5 class="modal-title" id="exampleModalLabel">Your balance is USD {{$user->wallet->balace}}</h5>
        @endif 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <!-- <b class="text-center text-dark">Copy the address to your prefered coin and fund with the amount filled in the form below.</b> -->
        </div>

        <form action="{{route('invest', [$offer->id])}}" method="POST">
          @csrf 
          <div class="form-group">
            <label for="" class="form-label">Amount</label>
            <input type="text" name="amount" placeholder="$2000" class="form-control">
          </div>
          <button style="background-color: #f7921a; float:right;" class="btn mt-4">Invest</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>