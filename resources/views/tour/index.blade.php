@extends('layout.master')
@section('content')
<h1>All The Tours</h1>
<a href="/tour/create">Create a Tours</a>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container-fluid">
    <div class="row">
        @foreach($tours as $key => $value)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><a href="/tour/{{$value->id}}"> {{$value->name}}</a></h5>
                  <h5>{{$value->price}} </h5>
                  <p class="card-text text-truncate">{{$value->description}} </p>
                  <a href="/schedule/{{$value->id}}">View Schedule</a>
                  <a href="/book/{{$value->id}}">Book Tour</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    
       
</div>


<table class="table table-striped table-bordered">
       
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Duration</td>
            <td>Date</td>
            <td>Area</td>
            <td>Flight</td>
        </tr>
    </thead>
    <tbody>
    @foreach($tours as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->duration }}</td>
            {{-- <td>{{ $value->date }}</td> --}}
            <td><a href="/schedule/{{$value->id}}">View Schedule</a></td>    
            <td>{{ $value->area }}</td>
            <td>{{ $value->flight->airline ?? '' }}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="/tour/{{$value->id}}">Show this tour</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="/tour/{{$value->id}}/edit">Edit this tour</a>
                <form action="/tour/{{$value->id}}" method="POST">
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
