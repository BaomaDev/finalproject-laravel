@extends('layout.master')

@section('title')
    <h1>Create Booking</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="http:/flight">Book</a></li>
        <li class="breadcrumb-item active">Book New Tour</li>
    </ol>
@endsection

@section('content')
    <form action="/book" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Customer</label>
            <select class="form-control" id="customer_id" name="customer_id">
                @foreach ($customers as $key => $value )
                <option value="{{$value->id}} ">{{$value->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tours</label>
            {{$tours->name}}<br>
            {{-- <select class="form-control" id="tour_id" name="tour_id">
                @foreach ($tours as $key => $value )
                <option value="{{$value->id}} ">{{$value->name}} </option>
                @endforeach
            </select> --}}
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
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Save</button>
        </div>
    </form>
@endsection    
    
