@extends('layout.master')

@section('title')
    <h1>Show Flight</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="http:/flight">Flights</a></li>
        <li class="breadcrumb-item active">Show</li>
    </ol>
@endsection

@section('content')
    <h1>{{$flight->airline}} </h1>
    <h1>{{$flight->date}} </h1>
    <a href="/flight">Back</a>
@endsection