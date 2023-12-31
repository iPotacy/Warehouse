@extends('admin.index')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}! 🎉</h5>
              <p class="mb-5">
                Kinerja gudang hari ini luar biasa! Cek Transaction baru di fitur admin untuk informasi lebih lanjut.
              </p>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="{{ asset('backend/assets/img/illustrations/man-with-laptop-light.png') }}"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- Order Statistics -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Stock Items</h5>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center mb-3">
            <canvas id="donutChart" style="max-height: 200px;"></canvas>
            <script>
            //ambil data nama kategori dan jumlah asset per asset dari DashboardController di fungsi index
            var lbl = [@foreach($items as $item) '{{ $item->nama_barang }}', @endforeach];
            var jml = [@foreach($items as $item) {{ $item->stok_barang }}, @endforeach];
            document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#donutChart'), {
                    type: 'doughnut',
                    data: {
                        /*
                        labels: ['January', 'February', 'March', 'April', 'May', 'June',
                            'July'
                        ],
                        */
                        labels: lbl,
                        datasets: [{
                            label: 'Items',
                            data: jml,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                                'rgb(255, 99, 132)',
                                'rgb(255, 159, 64)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)',
                                'rgb(54, 162, 235)',
                                'rgb(153, 102, 255)',
                                'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
        <!-- End Bar CHart -->
          </div>
          <ul class="p-0 m-0">
            @foreach ( $items as $item )
            @if ($item->stok_barang > 0)
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"
                  ><i class="bx bx-cart"></i
                ></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">{{ $item->nama_barang }}</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-1">
                  <small class="fw-semibold">{{ $item->stok_barang }}</small>
                </div>
              </div>
            </li>
            @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <!--/ Order Statistics -->

    <div class="col-md-6 col-lg-4 order-2 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Items Active</h5>
        </div>
        <div class="card-body">
          <ul class="p-0 m-0">
            @foreach ( $allItems as $it )
            @if ($it->status > 0)
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png') }}" alt="User" class="rounded" />
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">{{ $it->title }}</h6>
                </div>
              </div>
            </li>
            @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 order-2 mb-4">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Transactions</h5>
        </div>
        <div class="card-body">
          <ul class="p-0 m-0">
            @foreach ( $allTransaction as $ts )
            <li class="d-flex mb-4 pb-1">
              @if ($ts->title_status == 'Masuk')
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{ asset('backend/assets/img/icons/unicons/cc-success.png') }}" alt="User" class="rounded" />
              </div>
              @elseif ($ts->title_status == 'Keluar')
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{ asset('backend/assets/img/icons/unicons/cc-warning.png') }}" alt="User" class="rounded" />
              </div>
              @endif
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <small class="text-muted d-block mb-1">{{ $ts->title_status }}</small>
                  <h6 class="mb-0">{{ $ts->title_barang }}</h6>
                </div>
                <div class="user-progress d-flex align-items-center gap-1">
                  <h6 class="mb-0">{{ $ts->quantity }}</h6>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection