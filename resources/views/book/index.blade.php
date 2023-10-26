@extends('layout.master')

@section('title')
    <h1>Manage Booking</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="http:/flight">Book</a></li>
        <li class="breadcrumb-item active">Book New Tour</li>
    </ol>
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Date Transaction</td>
            <td>Payment</td>
            <td>Customer ID</td>
            <td>Tour</td>
            <td>Airline</td>
        </tr>
    </thead>
    <tbody>
    @foreach($bookings as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->payment }}</td>
            <td>{{ $value->customer->name }}</td>
            <td>{{ $value->schedule->tour->name }}</td>
            <td>{{ $value->schedule->tour->flight->airline }}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="/flight/{{$value->id}}">Show this Booking</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="/flight/{{$value->id}}/edit">Edit this Booking</a>
                <form action="/flight/{{$value->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection    
    
