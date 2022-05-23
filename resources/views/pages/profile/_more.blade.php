<style>
  .more-container{
    display: flex;
    grid-gap: 2rem;
  }
</style>
<div style="margin-top: 5rem;" class="container more-container">
  <div class="card personal-card" style="width: 18rem;">
    <div class="card-btns">
      <button class="btn">
        Withdraw
      </button>
      <button class="btn btn-fund" data-toggle="modal" data-target="#fund">
        Fund
      </button>
    </div>
    <h3 class="card-title text-center">Your Wallet</h3>
      <span class="text-center"><b>{{$wallet->balace}}</b></span>
  </div>
  @if(count($funds)>0)
  <div class="">
    <ul class="list-group">
    @foreach($funds as $fund)
      <li class="list-group-item"><p class="text-center text-dark">Your ${{$fund->amount}} funding is pending admin verification. </p></li>
    @endforeach
    </ul>
  </div>
  @endif

</div>

