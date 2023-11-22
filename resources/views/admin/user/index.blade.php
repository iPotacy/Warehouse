@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Title','Email','Role','Action'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
      <div class="panel-heading">
        <div class="row">
            <div class="col col-md-3">
              <a href="{{ url('/register') }}" class="btn btn-sm btn-primary active text-uppercase fw-semibold ms-auto p-2" title="Tambah Data">
                <i class="bi bi-clipboard-plus"></i> Register
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
            @foreach($data as $du)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $du->name }}</td>
              <td>{{ $du->email }}</td>
              <td>{{ $du->role }}</td>
              <td>
              <form method="POST" action="{{ route('users.destroy', ['id' => $du->id]) }}">
                @csrf
                @method('DELETE')
                <a href="{{route('users.edit', ['id' => $du->id])}}" class="btn btn-sm btn-warning active text-uppercase fw-semibold ms-auto p-2" title="Update Data">
                  <i class="bi bi-file-earmark-arrow-up"></i>
                </a>
                <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box" title="Hapus">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
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