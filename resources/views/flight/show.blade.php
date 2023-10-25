@extends('layout.master')
@section('content')
    <h1>{{$flight->airline}} </h1>
    <h1>{{$flight->date}} </h1>
    <a href="/flight">Back</a>
@endsection