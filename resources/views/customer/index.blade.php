@extends('layout.master')
@section('content')
<h1>All The Customer</h1>
<a href="/customer/create">Create a customer</a>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone Number</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->phoneNumber }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="/customer/{{$value->id}}">Show this customer</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="/customer/{{$value->id}}/edit">Edit this customer</a>
                <form action="/customer/{{$value->id}}" method="POST">
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
