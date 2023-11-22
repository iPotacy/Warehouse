@extends('admin.index')
@section('admin')

<div class="p-5">
  <div class="pagetitle">
    <h1 class="text-white">Dashboard Admin</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="pagetitle">
      <h1 class="text-white">Stock</h1>
    </div><!-- End Page Title -->
    <div class="row">
      <div class="col-lg-12">

        <div class="row">
          @foreach ( $items as $item )
          @if ($item->stok_barang > 0)
          <div class="col-xxl-4 col-md-3">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_barang }}</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-calculator-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $item->stok_barang }}</h6>
                    <span class="text-muted small pt-2 ps-1">Items</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>

        <div class="pagetitle">
          <h1 class="text-white">Items</h1>
        </div><!-- End Page Title -->

        <div class="row">
          @foreach ( $allItems as $barang )
          @if ($barang->status > 0)
          <div class="col-xxl-4 col-md-3">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Item</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-calculator-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6 class="text-muted small pt-2 ps-1">{{ $barang->title }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>
  
        <!-- Status Items-->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

              @php
                  $ar_judul = ['No','Title','Created At','Status'];
                  $no = 1;
              @endphp
            <div class="card-body">
              <h5 class="card-title">Status <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    @foreach($ar_judul as $jdl)
                      <th>{{$jdl}}</th>
                    @endforeach
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">1</a></th>
                    <td>Brandon Jacob</td>
                    <td><a href="#" class="text-primary">At praesentium minu</a></td>
                    <td><span class="badge bg-success">Aktif</span></td>
                  </tr>
                  <tr>
                      <th scope="row"><a href="#">2</a></th>
                      <td>Brandon Jacob</td>
                      <td><a href="#" class="text-primary">At praesentium minu</a></td>
                      <td><span class="badge bg-danger">Tidak Aktif</span></td>
                    </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->
      </div><!-- End Left side columns -->

    </div>
  </section>
</div>
@endsection