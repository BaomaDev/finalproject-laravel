@extends('layout.master')


@section('content')
    <form action="/customer" method="POST">
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
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
            @error('email')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone Number +62xxxxxx">
            @error('phoneNumber')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday">
            @error('birthday')
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
    
