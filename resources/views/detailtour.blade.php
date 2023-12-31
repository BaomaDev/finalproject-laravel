@extends('layoutUser.master')

@section('judul')
{{-- <div class="container">
  <div class="row align-items-center">
    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="{{asset('/templateUser/assets/img/hero/hero-img.png')}}" alt="hero-header" /></div>
    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
      <h4 class="fw-bold text-danger mb-3">Detail Tour</h4>
      <h1 class="hero-title">Travel, enjoy and live a new and full life</h1>
      <p class="mb-4 fw-medium">Built Wicket longer admire do barton vanity itself do in it.<br class="d-none d-xl-block" />Preferred to sportsmen it engrossed listening. Park gate<br class="d-none d-xl-block" />sell they west hard for the.</p>
    </div>
  </div>
</div> --}}
@endsection

@section('tour')

  <div class="row">
        <div class="col">
          <div class="card overflow-hidden shadow"> <img class="card-img-top" src="assets/img/dest/dest1.jpg" alt="Rome, Italty" />
            <div class="card-body py-4 px-3">
              <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                  <h4 class="text-secondary fw-medium">{{$tour->name}}</h4>
                  <span class="fs-1 fw-medium">Rp. {{ number_format($tour->price)}} </span>
              </div>
              <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                <h4 class="text-secondary fw-medium">{{$tour->description}}</h4>
              </div>
              <div class="d-flex align-items-center"> 
                  <img src="{{asset('/templateUser/assets/img/dest/navigation.svg')}}" style="margin-right: 14px" width="20" alt="navigation" />
                  <span class="fs-0 fw-medium">{{$tour->duration}} </span>
                  
              </div>
              <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                <h3><a href="/booking/{{$tour->id}}">Book Tour</a></h3>
              </div>
            </div>
          </div>
      </div>
    
    
    
  </div>

    
@endsection