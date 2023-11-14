@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Title','Status','Created At'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h3 class="ms-2 mt-5">All Items</h3>

      <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary active text-uppercase fw-semibold mx-2 p-2" title="Tambah Data">
        <i class="bi bi-clipboard-plus"></i> Tambah
      </a>

      <div class="table-responsive my-3">
        <table class="table table-bordered table-responsive table-hover table-primary table-striped table-sm table-md table-lg" id="example">
          <thead>
            <tr>
              @foreach($ar_judul as $jdl)
                <th class="text-center" style="white-space: nowrap;">{{$jdl}}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach($mBarang as $mb)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $mb->title }}</td>
              <td>{{ $mb->status }}</td>
              <td>{{ $mb->created_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
</div>
@endsection