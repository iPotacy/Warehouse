@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Title','Status','Created At','Update'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
      <div class="panel-heading">
        <div class="row">
            <div class="col col-md-3">
              <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary active text-uppercase fw-semibold ms-auto p-2" title="Tambah Data">
                <i class="bi bi-clipboard-plus"></i> Tambah
              </a>
            </div>
        </div>
      </div>
      <div class="panel-body table-responsive">
        <table id="example" class="table table-hover table-bordered">
          <thead>
            <tr>
              @foreach($ar_judul as $jdl)
                <th style="background-color: #b8c1ec">{{$jdl}}</th>
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
              <td>
                <a href="{{route('barang.edit', ['id' => $mb->id])}}" class="btn btn-sm btn-warning active text-uppercase fw-semibold ms-auto p-2" title="Tambah Data">
                  <i class="bi bi-file-earmark-arrow-up"></i> Update
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection