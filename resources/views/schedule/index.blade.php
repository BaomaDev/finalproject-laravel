@extends('layout.master')
@section('content')
<h1>All The Schedule</h1>
<a href="/schedule/create">Create a Schedule</a>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Tanggal Keberangkatan</td>
            <td>Tanggal Kepulangan</td>
            <td>Tour</td>
        </tr>
    </thead>
    <tbody>
    @foreach($schedules as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->tanggalBerangkat }}</td>
            <td>{{ $value->tanggalPulang }}</td>
            <td>{{ $value->tour->name }}</td>
            
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="/schedule/{{$value->id}}">Show this schedule</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="/schedule/{{$value->id}}/edit">Edit this schedule</a>
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
