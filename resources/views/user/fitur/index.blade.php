@extends('user.index')
@section('user')
@php
  $ar_judul = ['No','Item','Status','Create Up'];
  $no = 1;
@endphp
<h4 class="fw-bold py-1 mt-3 ms-4"><span class="text-muted fw-light">Form Items/</span> Items</h4>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="container flex-grow-1 mb-4 mt-4">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="btn btn-danger" href="{{ route('ExportPDF') }}">PDF</a>
          </li>
        </ul>
      </div>
      <div class="card-datatable table-responsive">
        <table class="dataTable datatables-basic table table-striped border-top">
          <thead>
            <tr>
              @foreach($ar_judul as $jdl)
              <th>{{ $jdl }}</th>
              @endforeach
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($vBarang as $tb)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $tb->title }}</td>
              @if ($tb->status === 1)
              <td><span class="badge bg-label-success me-1">Active</span></td>
              @else
              <td><span class="badge bg-label-danger me-1">Not Active</span></td>
              @endif
              <td>{{ $tb->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection