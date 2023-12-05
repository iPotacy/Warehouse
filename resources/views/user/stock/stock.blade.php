@extends('user.index')
@section('user')
@php
  $ar_realTime = ['No', 'Nama Barang', 'Stok Barang'];
  $ar_judul = ['No', 'Nama Barang','Bulan/Tahun','Stok Masuk','Stok Keluar', 'Jumlah Stok'];
  $no = 1;
@endphp
<h4 class="fw-bold py-1 mt-3 ms-4"><span class="text-muted fw-light">Form Stock/</span> Stock</h4>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    @if(isset($selectedData) && count($selectedData) == 0)
    <p>Tidak ada data stock untuk bulan ini.</p>
    @elseif(isset($selectedData) && count($selectedData) > 0)
    <div class="card mb-4">
      <div class="mb-3 mt-3 me-4 text-end">
        <a href="{{ url('/stock') }}" class="btn btn-secondary mr-2">Reset</a>
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
            @foreach($selectedData as $result)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $result->nama_barang }}</td>
                  <td>{{ $result->bulan_tahun }}</td>
                  <td>{{ $result->stok_masuk }}</td>
                  <td>{{ $result->stok_keluar }}</td>
                  <td>{{ $result->jumlah_stok }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @endif
    <div class="card">
      <div class="card-datatable table-responsive">
        <div class="card-header flex-column flex-md-row">
          <div class="row align-items-end">
            <h5 class="card-header">Check byMonth</h5>
            <div class="col-md-9">
              <form id="contactForm" method="get" action="{{ url('/stock') }}">
                @csrf
                <div class="row align-items-end">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="month" class="mr-2">Month</label>
                                <input type="month" name="month" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
          <table class="dataTable datatables-basic table table-striped border-top">
            <thead>
              <tr>
                @foreach($ar_realTime as $jdl)
                <th>{{ $jdl }}</th>
                @endforeach
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach($rBarang as $result)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $result->nama_barang }}</td>
                    <td>{{ $result->stok_barang }}</td>
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