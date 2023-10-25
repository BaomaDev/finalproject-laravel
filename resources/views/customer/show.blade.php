@extends('layout.master')
@section('content')
    <h1>{{$customer->name}} </h1>
    <h1>{{$customer->email}} </h1>
    <a href="/customer">Back</a>
@endsection