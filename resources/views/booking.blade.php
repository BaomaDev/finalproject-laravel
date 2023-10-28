@extends('layoutUser.master')

@section('judul')
<div class="container">
  <div class="row align-items-center">
        <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
      <h4 class="fw-bold text-danger mb-3">Booking Tour</h4>
      </div>
  </div>
</div>
@endsection

@section('tour')
  <div class="row">
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
            <label for="exampleFormControlSelect1">Payment Opt</label>
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
    </form>
  </div>
@endsection
