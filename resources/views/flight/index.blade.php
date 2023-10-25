@extends('layout.master')
@section('content')
<h1>All The Customer</h1>
<a href="/flight/create">Create a flight</a>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Airline</td>
            <td>Date</td>
            <td>Departure</td>
            <td>Arival</td>
        </tr>
    </thead>
    <tbody>
    @foreach($flights as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->airline }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->departure }}</td>
            <td>{{ $value->arrival }}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="/flight/{{$value->id}}">Show this flight</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="/flight/{{$value->id}}/edit">Edit this flight</a>
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
