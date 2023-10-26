@extends('layout.master')

@section('title')
    <h1>Edit Flight</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="http:/flight">Flights</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection

@section('content')
<form action="/flight/{{$flight->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="airline">Airline</label>
        <input type="text" class="form-control" name="airline" id="airline" placeholder="Airline" value="{{$flight->airline}}">
        @error('airline')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="birthday">Date:</label>
        <input type="date" id="date" name="date">
        @error('date')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="departure">Departure</label>
        <input type="text" class="form-control" name="departure" id="departure" placeholder="City Departure" value="{{$flight->departure}}">
        @error('departure')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="arrival">Arival</label>
        <input type="text" class="form-control" name="arrival" id="arrival" placeholder="City Arrival" value="{{$flight->arrival}}">
        @error('arrival')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Save</button>
    </div>
</form>
@endsection