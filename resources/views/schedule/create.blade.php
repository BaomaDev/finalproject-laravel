@extends('layout.master')


@section('content')
    <form action="/schedule" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tour</label>
            <select class="form-control" id="tour_id" name="tour_id">
                @foreach ($tours as $key => $value )
                <option value="{{$value->id}} ">{{$value->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggalBerangkat">Tanggal Berangkat :</label>
            <input type="date" id="tanggalBerangkat" name="tanggalBerangkat">
            @error('tanggalBerangkat')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggalPulang">Tanggal Pulang :</label>
            <input type="date" id="tanggalPulang" name="tanggalPulang">
            @error('tanggalPulang')
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
    
