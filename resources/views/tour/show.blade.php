@extends('layout.master')
@section('content')
    <h1>{{$tour->name}} </h1>
    <h1>{{$tour->description}} </h1>
    <h1>{{$tour->price}} </h1>
    <h1>{{$tour->duration}} </h1>
    <h1>{{$tour->date}} </h1>
    <h1>{{$tour->area}} </h1>
    <h1>{{$tour->flight->airline}} </h1>
    <a href="/tour">Back</a>
@endsection