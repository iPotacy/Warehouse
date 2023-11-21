@extends('admin.index')
@section('admin')

<div class="p-5">
    <div class="pagetitle">
        <h1 class="text-white pb-4">Dashboard Admin</h1>
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
  
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
  
              <!-- Transaction Card -->
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">
  
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
  
                  <div class="card-body">
                    <h5 class="card-title">Transaction <span>| Today</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-calculator-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-muted small pt-2 ps-1">Items</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Transaction Card -->
  
              <!-- Items Card -->
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
  
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
  
                  <div class="card-body">
                    <h5 class="card-title">Items <span>| This Month</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-bag"></i>
                      </div>
                      <div class="ps-3">
                        <h6>264</h6>
                        <span class="text-muted small pt-2 ps-1">Items</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Items Card -->

              <!-- Barang masuk Card -->
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">
  
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
  
                  <div class="card-body">
                    <h5 class="card-title">Barang Masuk <span>| Today</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-bag-plus"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-muted small pt-2 ps-1">Items</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
            </div><!-- End Barang masuk Card -->
  
              <!-- Barang keluara Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
    
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
    
                        <div class="card-body">
                        <h5 class="card-title">Barang Keluar <span>| This Month</span></h5>
    
                        <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-bag-dash"></i>
                        </div>
                        <div class="ps-3">
                            <h6>264</h6>
                            <span class="text-muted small pt-2 ps-1">Items</span>
    
                        </div>
                        </div>
                    </div>
    
                    </div>
                </div><!-- End Barang keluar Card -->
  
              <!-- Users Card -->
              <div class="col-xxl-4 col-xl-8">
  
                <div class="card info-card customers-card">
  
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
  
                  <div class="card-body">
                    <h5 class="card-title">Users</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-muted small pt-2 ps-1">Users</span>
  
                      </div>
                    </div>
  
                  </div>
                </div>
  
              </div><!-- End Customers Card -->
  
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
            </div>
          </div><!-- End Left side columns -->
  
        </div>
      </section>
</div>
@endsection