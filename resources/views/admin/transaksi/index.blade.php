@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Description','Receiver','Status','Create Up', 'Action'];
  $no = 1;
@endphp
<h4 class="fw-bold py-1 mt-3 ms-4"><span class="text-muted fw-light">Input Transaction /</span> Transaction</h4>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="container flex-grow-1 mb-4 mt-4">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('transaksi.create') }}"><i class="bx bx-plus me-1"></i> Add...</a>
          </li>
        </ul>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              @foreach($ar_judul as $jdl)
              <th>{{ $jdl }}</th>
              @endforeach
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($tBarang as $tb)
            <tr>
              <td>{{ $no++ }}</td>
              <td
                style=" max-width: 110px; 
                        overflow: hidden; 
                        white-space: nowrap; 
                        text-overflow: ellipsis;"
              >
              {{ $tb->title_barang }}
              </td>
              <td>{{ $tb->name }}</td>
              @if ($tb->title_transaction === 'Barang Masuk')
              <td>
                <span class="badge bg-label-info me-1">Masuk</span>
              </td>
              @else
              <td>
                <span class="badge bg-label-warning me-1">Keluar</span>
              </td>
              @endif
              <td>{{ $tb->quantity }}</td>
              <td 
                style="max-width: 150px; 
                       overflow: hidden; 
                       white-space: nowrap; 
                       text-overflow: ellipsis;"
              >
              {{ $tb->description }}
              </td>
              <td>{{ $tb->receiver }}</td>
              @if ($tb->title_status === 'Masuk')
              <td>
                <span class="badge bg-label-success me-1">Received</span>
              </td>
              @else
              <td>
                <span class="badge bg-label-danger me-1">Dispatched</span>
              </td>
              @endif
              <td>{{ $tb->created_at->format('d-m-Y') }}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('transaksi.show', $tb->id) }}"
                      ><i class="bx bx-edit-alt me-1"></i>Invoice</a
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