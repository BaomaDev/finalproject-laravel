@extends('layout.master')

@section('title')
    <h1>Show Detail Customer</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="http:/customer">Customer</a></li>
        <li class="breadcrumb-item active">Show</li>
    </ol>
@endsection

@section('content')
    <h1>{{$customer->name}} </h1>
    <h1>{{$customer->email}} </h1>
    <a href="/customer">Back</a>
@endsection