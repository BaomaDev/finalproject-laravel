@extends('layout.master')
@section('content')
<form action="/tour/{{$tour->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Nama" value="{{$tour->name}}">
        @error('name')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="description" value="{{$tour->description}}">
        @error('description')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{$tour->price}}">
        @error('price')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="duration">Duration</label>
        <input type="text" class="form-control" name="duration" id="duration" placeholder="duration" value="{{$tour->duration}}">
        @error('duration')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">
        @error('date')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="area">Area</label>
        <input type="text" class="form-control" name="area" id="area" placeholder="area" value="{{$tour->area}}">
        @error('area')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="flight">Flight</label>
        <input type="text" class="form-control" name="flight" id="flight" placeholder="flight" value="{{$tour->flight_id}}">
        @error('area')
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