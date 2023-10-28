@extends('layoutUser.master')

@section('judul')
    <h1>Manage Booking</h1>
@endsection


@section('tour')

<div class="container">
    <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
    <img src="{{asset('/templateUser/assets/img/dest/shape.svg')}}" alt="destination" /></div>
  
    <div class="row">
        <div class="col">
            <div class="card overflow-hidden shadow"> 
                <img class="card-img-top" src="{{asset('/templateUser/assets/img/dest/dest1.jpg')}}" alt="Rome, Italty" />
              <div class="card-body py-4 px-3">
                <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">

                    <table class="table">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Payment</td>
                                <td>Tour Name</td>
                                <td>Departure</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $item=>$value)
                            <tr>
                                <td>
                                    <label for="exampleFormControlSelect1" id="customer_id">{{$value->user->name}}</label>
                                </td>
                                <td>
                                    <label for="exampleFormControlSelect1" id="customer_id">{{$value->payment}}</label>
                                </td>
                                <td>
                                    <label for="exampleFormControlSelect1" id="customer_id">{{$value->schedule->tour->name}}</label>
                                </td>
                                <td>
                                    <label for="exampleFormControlSelect1" id="customer_id">{{$value->schedule->tanggalBerangkat}}</label>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <h4 class="text-secondary fw-medium">name</h4>
                    <span class="fs-1 fw-medium">Rp. 2222 </span> --}}
                </div>
                {{-- <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                  <h4 class="text-secondary fw-medium">lorem</h4>
                </div> --}}
            </div>
        </div>
    </div>
        {{-- <form action="/book" method="POST">
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
          
      </form> --}}
      
      
    </div>
  </div>


    <form action="/book" method="POST">
        @csrf
        <div class="">

        </div>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Payment</td>
                    <td>Tour Name</td>
                    <td>Departure</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $item=>$value)
                <tr>
                    <td>
                        <label for="exampleFormControlSelect1" id="customer_id">{{$value->user->name}}</label>
                    </td>
                    <td>
                        <label for="exampleFormControlSelect1" id="customer_id">{{$value->payment}}</label>
                    </td>
                    <td>
                        <label for="exampleFormControlSelect1" id="customer_id">{{$value->schedule->tour->name}}</label>
                    </td>
                    <td>
                        <label for="exampleFormControlSelect1" id="customer_id">{{$value->schedule->tanggalBerangkat}}</label>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </form>
@endsection    
    
