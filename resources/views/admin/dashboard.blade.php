@extends('admin.index')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Congratulations {{ Auth::user()->name }}! 🎉</h5>
              <p class="mb-5">
                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                your profile.
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
            <div id="orderStatisticsChart"></div>
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