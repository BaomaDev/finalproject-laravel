@extends('layout.master')
@section('content')
<h1> {{$tour->name}}</h1><br>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Tanggal Berangkat</td>
            <td>Tanggal pulang</td>
        </tr>
    </thead>
    <tbody>
    @foreach($schedules as $key)
        <tr>
            <td>{{ $key->id }}</td>
            <td>{{ $key->tanggalBerangkat }}</td>
            <td>{{ $key->tanggalPulang }}</td>
            
        </tr>
    @endforeach
    </tbody>
</table>
<a href="/tour">Back</a>
@endsection