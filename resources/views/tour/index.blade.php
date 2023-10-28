@extends('layout.master')

@push('scripts')
<script src="{{asset('/template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('/template/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('/template/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('/template/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endpush

@push('scriptsDataTable')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endpush

@section('content')
<h1>All The Tours</h1>
<a href="/tour/create">Create a Tours</a>
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{{Auth::user()->name}}
<div class="container-fluid">
    <div class="row">
        @foreach($tours as $key => $value)
        <div class="col">
            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                  <h5 class="card-title"><a href="/tour/{{$value->id}}"> {{$value->name}}</a></h5><br>
                  <h5>Rp. {{number_format($value->price)}} </h5>
                  <p class="card-text text-truncate">{{$value->description}} </p>
                  <a href="/schedule/{{$value->id}}">View Schedule</a>
                  <a href="/book/{{$value->id}}">Book Tour</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    
       
</div>

{{-- datatable --}}
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Tour Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Duration</th>
          <th>Date</th>
          {{-- <th>Area</th>
          <th>Flight</th> --}}
        </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              a
            </td>
          </tr>
            
        </tbody>
        <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>



{{-- table biasa --}}
  {{-- <table class="table table-striped table-bordered">
       
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Duration</td>
            <td>Date</td>
            <td>Area</td>
            <td>Flight</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tours as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->duration }}</td>
            <td><a href="/schedule/{{$value->id}}">View Schedule</a></td>    
            <td>{{ $value->area }}</td>
            <td>{{ $value->flight->airline ?? '' }}</td>
            <td>       
                <a class="btn btn-small btn-success" href="/tour/{{$value->id}}">Show this tour</a>
                <a class="btn btn-small btn-info" href="/tour/{{$value->id}}/edit">Edit this tour</a>
                <form action="/tour/{{$value->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> --}}
@endsection
