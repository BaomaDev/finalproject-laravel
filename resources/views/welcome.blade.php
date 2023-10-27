@extends('layoutUser.master')

@section('judul')
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="{{asset('/templateUser/assets/img/hero/hero-img.png')}}" alt="hero-header" /></div>
    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
      <h4 class="fw-bold text-danger mb-3">Best Destinations around the world</h4>
      <h1 class="hero-title">Travel, enjoy and live a new and full life</h1>
      <p class="mb-4 fw-medium">Built Wicket longer admire do barton vanity itself do in it.<br class="d-none d-xl-block" />Preferred to sportsmen it engrossed listening. Park gate<br class="d-none d-xl-block" />sell they west hard for the.</p>
    </div>
  </div>
</div>
@endsection

@section('tour')

<div class="container">
  <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img src="assets/img/dest/shape.svg" alt="destination" /></div>
  <div class="mb-7 text-center">
    <h5 class="text-secondary">Top Selling </h5>
    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Top Destinations</h3>
  </div>
  <div class="row">
    @foreach($tours as $key => $value)
        <div class="col-md-4 mb-4">
        <div class="card overflow-hidden shadow"> 
          <div class="card-body py-4 px-3">
            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link" href="/detailtour/{{$value->id}}">{{$value->name}} </a>
                </h4><span class="fs-1 fw-medium">Rp. {{number_format($value->price)}} </span>
            </div>
            <div class="d-flex align-items-center"> 
                <img src="{{asset('/templateUser/assets/img/dest/navigation.svg')}}" style="margin-right: 14px" width="20" alt="navigation" />
                <span class="fs-0 fw-medium">{{$value->duration}} </span></div>
          </div>
        </div>
      </div>
    @endforeach
    
    
  </div>
</div>
    
@endsection