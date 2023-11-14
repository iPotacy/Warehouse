@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Description','Receiver','Status','Create Up'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h3 class="ms-2 mt-5">All Transaction</h3>

      <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-primary active text-uppercase fw-semibold mx-2 p-2" title="Tambah Data">
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
            @foreach($tBarang as $tb)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $tb->title_barang }}</td>
              <td>{{ $tb->name }}</td>
              <td>{{ $tb->title_transaction }}</td>
              <td>{{ $tb->quantity }}</td>
              <td>{{ $tb->description }}</td>
              <td>{{ $tb->receiver }}</td>
              <td>{{ $tb->title_status }}</td>
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