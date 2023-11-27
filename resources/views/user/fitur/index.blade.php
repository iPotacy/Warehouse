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
{{-- <div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="panel">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col col-md-12">
                          <h4>Item</h4>
                      </div>
                  </div>
              </div>

              <div class="panel-body table-responsive">
                  <table id="example" class="table table-hover table-bordered">
                      <thead class="bg-dark text-warning">
                        <tr>
                          @foreach($ar_judul as $jdl)
                            <th style="background-color: #b8c1ec">{{$jdl}}</th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($vBarang as $tb)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $tb->title }}</td>
                          @if ($tb->status === 1)
                          <td><span class="badge bg-success">Aktif</span></td>
                          @else
                          <td><span class="badge bg-danger">Tidak Aktif</span></td>
                          @endif
                          <td>{{ $tb->created_at }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
@endsection