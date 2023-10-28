@extends('layoutUser.master')

@section('judul')
Confirm Booking
@endsection

@section('tour')

<div class="container">
  <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
  <img src="{{asset('/templateUser/assets/img/dest/shape.svg')}}" alt="destination" /></div>
  {{-- <div class="mb-7 text-center">
    <h5 class="text-secondary">Top Selling </h5>
    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Top Destinations</h3>
  </div> --}}
  thanks for booking
  <a href="/create-pdf" target="_blank">Print Invoice</a>
  {{-- <div class="row">
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
    
    
    
  </div> --}}
</div>
    
@endsection