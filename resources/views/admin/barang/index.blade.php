@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Title','Status','Created At','Action'];
  $no = 1;
@endphp
<h4 class="fw-bold py-1 mt-3 ms-4"><span class="text-muted fw-light">Form Items/</span> Items</h4>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="container flex-grow-1 mb-4 mt-4">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('barang.create') }}"><i class="bx bx-plus me-1"></i> Add...</a>
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
            @foreach($mBarang as $mb)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $mb->title }}</td>
              @if ($mb->status === 1)
              <td><span class="badge bg-label-success me-1">Active</span></td>
              @else
              <td><span class="badge bg-label-danger me-1">Not Active</span></td>
              @endif
              <td>{{ $mb->created_at->format('d-m-Y') }}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('barang.edit', ['id' => $mb->id]) }}"
                      ><i class="bx bx-edit-alt me-1"></i>Update</a
                    >
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection