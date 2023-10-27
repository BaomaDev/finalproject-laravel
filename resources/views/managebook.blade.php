@extends('layoutUser.master')

@section('judul')
    <h1>Manage Booking</h1>
@endsection


@section('tour')
    <form action="/book" method="POST">
        @csrf
        

        @foreach ($bookings as $item=>$value)
        <label for="exampleFormControlSelect1" id="customer_id">{{$value->id}}</label><br>
        <label for="exampleFormControlSelect1" id="customer_id">{{$value->user->name}}</label><br>
        @endforeach
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Save</button>
        </div>
    </form>
@endsection    
    
