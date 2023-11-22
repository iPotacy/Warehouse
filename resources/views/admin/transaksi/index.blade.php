@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Description','Receiver','Status','Create Up', 'Action'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="panel">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col col-md-3">
                        <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-primary active text-uppercase fw-semibold ms-auto p-2" title="Tambah Data">
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
                      @foreach($tBarang as $tb)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $tb->title_barang }}</td>
                        <td>{{ $tb->name }}</td>
                        <td>{{ $tb->title_transaction }}</td>
                        <td>{{ $tb->quantity }}</td>
                        <td>{{ $tb->description }}</td>
                        <td>{{ $tb->receiver }}</td>
                        @if ($tb->title_status === 'Masuk')
                          <td><span class="badge bg-success">{{ $tb->title_status }}</span></td>
                        @else
                          <td><span class="badge bg-danger">{{ $tb->title_status }}</span></td>
                        @endif
                        <td>{{ $tb->created_at }}</td>
                        <td>
                          <a href="{{ route('transaksi.show', $tb->id) }}" class="btn btn-sm btn-warning active text-uppercase fw-semibold ms-auto" title="View">
                            <i class="bi bi-file-earmark-arrow-up"></i>
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