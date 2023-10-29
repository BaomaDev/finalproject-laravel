@extends('layout.master')

@section('title')
    <h1>Edit Schedule</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/schedule">Schedules</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
</section>

@section('content')
<form action="/schedule/{{$schedule->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="tanggalBerangkat">Tanggal Keberangkatan</label>
        <input type="date" class="form-control" name="tanggalBerangkat" id="tanggalBerangkat" value="{{$schedule->tanggalBerangkat}}">
        @error('tanggalBerangkat')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tanggalPulang">Tanggal Kepulangan</label>
        <input type="date" class="form-control" name="tanggalPulang" id="tanggalPulang" value="{{$schedule->tanggalPulang}}">
        @error('tanggalPulang')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tour_id">Tour</label>
        <select class="form-control" name="tour_id" id="tour_id">
            @foreach($tours as $tour)
                <option value="{{$tour->id}}" {{$tour->id == $schedule->tour_id ? 'selected' : ''}}>
                    {{$tour->name}}
                </option>
            @endforeach
        </select>
        @error('tour_id')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Save</button>
    </div>
</form>
@endsection
