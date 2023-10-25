@extends('layout.master')


@section('content')
    <form action="/tour" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
            @error('name')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Tour Description">
            @error('description')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price">Price </label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price In Rupiah">
            @error('price')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="duration">Duration </label>
            <input type="text" class="form-control" name="duration" id="duration" placeholder="Tour Duration">
            @error('duration')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date">Date :</label>
            <input type="date" id="date" name="date">
            @error('date')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="area">Area :</label>
            <input type="area" id="area" name="area" placeholder="Tours Area">
            @error('date')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div> --}}
        <div class="form-group">
            <label for="exampleFormControlSelect1">Area</label>
            <select class="form-control" id="area" name="area">
              <option value="Australia & New Zealand">Australia  & New Zealand</option>
              <option value="Asia">Asia</option>
              <option value="Chinese Mainland">Chinese Mainland</option>
              <option value="Europe">Europe</option>
              <option value="USA">USA</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="flight">Flight </label>
            <input type="text" class="form-control" name="flight" id="flight" placeholder="Flight">
            @error('flight')
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
    
