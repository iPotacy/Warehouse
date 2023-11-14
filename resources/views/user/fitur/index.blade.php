@extends('user.index')
@section('user')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Description','Receiver','Status','Create Up'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h3 class="ms-2 mt-5">Check Barang</h3>

      <div class="table-responsive my-3">
        <table id="example" class="table table-bordered table-responsive table-hover table-primary table-striped table-sm table-md table-lg" >
          <thead class="bg-dark text-warning">
            <tr>
              @foreach($ar_judul as $jdl)
                <th class="text-center" style="white-space: nowrap;">{{$jdl}}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach($vBarang as $tb)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $tb->item }}</td>
              <td>{{ $tb->user }}</td>
              <td>{{ $tb->transaction }}</td>
              <td>{{ $tb->quantity }}</td>
              <td>{{ $tb->description }}</td>
              <td>{{ $tb->receiver }}</td>
              <td>{{ $tb->status }}</td>
              <td>{{ $tb->created_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
</div>
@endsection