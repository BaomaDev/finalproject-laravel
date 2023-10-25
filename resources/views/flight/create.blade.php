@extends('layout.master')


@section('content')
    <form action="/flight" method="POST">
        @csrf
        <div class="mb-3">
            <label for="airline">Airline</label>
            <input type="text" class="form-control" name="airline" id="airline" placeholder="Airline">
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
            <input type="text" class="form-control" name="departure" id="departure" placeholder="City Departure">
            @error('departure')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="arrival">Arival</label>
            <input type="text" class="form-control" name="arrival" id="arrival" placeholder="City Arrival">
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
    
