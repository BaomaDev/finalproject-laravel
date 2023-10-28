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
        {{-- <div class="col">
        <div class="card overflow-hidden shadow"> <img class="card-img-top" src="assets/img/dest/dest1.jpg" alt="Rome, Italty" />
          <div class="card-body py-4 px-3">
            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                <h4 class="text-secondary fw-medium">{{$tour->name}}
                </h4>
                <span class="fs-1 fw-medium">Rp. {{ number_format($tour->price)}} </span>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
              <h4 class="text-secondary fw-medium">{{$tour->description}}
              </h4>
              
          </div>
            <div class="d-flex align-items-center"> 
                <img src="{{asset('/templateUser/assets/img/dest/navigation.svg')}}" style="margin-right: 14px" width="20" alt="navigation" />
                <span class="fs-0 fw-medium">{{$tour->duration}} </span></div>
                <a href="/book/{{$tour->id}}">Book Tour</a>
          </div>
        </div>
      </div> --}}
      <form action="/book" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Customer : </label>
            {{ Auth::user()->name }}
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Airline : </label>
          {{ $tours->flight->airline }}
         
      </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tours</label>
            {{$tours->name}}<br>

        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Departure Date</label>
            <select class="form-control" id="schedule_id" name="schedule_id">
                @foreach ($schedules as $key => $value )
                <option value="{{$value->id}} ">{{$value->tanggalBerangkat}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Area</label>
            <select class="form-control" id="payment" name="payment">
              <option value="cash">Cash</option>
              <option value="transferBca">Transfer BCA</option>
              <option value="transferBitcoin">Transfer Bitcoin</option>
            
            </select>
        </div>
        <div class="form-group">
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Save</button>
        </div>
      </div>
        
    </form>
    
    
  </div>
    
@endsection