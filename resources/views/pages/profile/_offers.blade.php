<div class="container offers">
  @foreach($offers as $offer)
  <div class="card">
    <div class="card-body">
      <p class="text-center"><b>{{$offer->name}}</b></p>
      <img src="{{ asset('BlogPhotos/'.$offer->img) }}" class="card-img" alt="">
      <h4 class="text-center">{{$offer->title}}</h4>
      <p class="text-center"><span>{{$offer->interest}}%/week</span></p>
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#descr-{{$offer->id}}" aria-expanded="true" aria-controls="collapseOne">
                Read More...
              </button>
            </h2>
          </div>

          <div id="descr-{{$offer->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
            </div>
          </div>
        </div>
      </div>
      <div>
        <button style="float: right;" data-toggle="modal" data-target="#exampleModal-{{$offer->id}}" class="btn btn-success mt-4 btn-sm">
          Invest Now
        </button>
      </div>
    </div>
  </div>
  @include('pages\profile\_wallet_modal')
  @endforeach

</div>