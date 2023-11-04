<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


{{-- class ini untuk background belakanganya blur --}}
<body class="bg-secondary">
  {{-- div ini untuk pembungkus keseluruhan content --}}
  <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
    
    {{-- ini adalah kata kata header di paling atas --}}
    <h1>Halo!! {{ Auth::user()->name }}</h1> {{-- ini sudah di logic klo yang login user atau admin --}}
    @if (Auth::user()->role == 'admin')
    <div>Selamat datang di halaman admin</div>
    @endif
    @if (Auth::user()->role == 'user')
    <div>Selamat datang di halaman user</div>
    @endif

    {{-- ini adalah button logout --}}
    <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
    
    {{-- ini adalah list secondary --}}
    <div class="card mt-3">
      <ul class="list-group list-group-flush">
        @if (Auth::user()->role == 'admin') {{-- ini sudah di logic klo yang login user atau admin --}}
        <li class="list-group-item">Menu Admin</li>
        @endif
        @if (Auth::user()->role == 'user')
        <li class="list-group-item">Menu User</li>
        @endif
      </ul>
    </div>

  </div>
<body>

  {{-- Admin Page --}}
  @if (Auth::user()->role == 'admin')
  {{-- Navbar --}}
  <div class="bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
              <a class="navbar-brand active text-uppercase fw-semibold" href="#">Warehouse</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item text-danger">
                    <a class="btn btn-sm btn-danger active text-uppercase fw-semibold" href="/logout" aria-current="page">
                        Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  {{-- Akhir Navbar --}}

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h3 class="ms-2 mt-5">All Transaction</h3>

        <div class="d-flex justify-content-end mt-3">
          <a href="" class="btn btn-sm btn-success active text-uppercase fw-semibold mx-2 p-2">Input Barang</a>
          <a href="" class="btn btn-sm btn-success active text-uppercase fw-semibold mx-2 p-2">Input Status</a>
          <a href="" class="btn btn-sm btn-success active text-uppercase fw-semibold mx-2 p-2">Tambah</a>
        </div>

        <div class="table-responsive my-3">
          <table class="table table-bordered table-responsive table-hover table-striped table-sm table-md table-lg">
            <thead class="bg-warning">
              <tr>
                <th class="text-center" style="white-space: nowrap;">Jenis Barang</th>
                <th class="text-center" style="white-space: nowrap;">User Input</th>
                <th class="text-center" style="white-space: nowrap;">Transaction</th>
                <th class="text-center" style="white-space: nowrap;">Jumlah Barang</th>
                <th class="text-center" style="white-space: nowrap;">Description</th>
                <th class="text-center" style="white-space: nowrap;">Receiver</th>
                <th class="text-center">Create Up</th>
                <th class="text-center" style="white-space: nowrap;">Action</th>
              </tr>
            </thead>
          </table>
        </div>
        
      </div>
    </div>
  </div>
  @endif
  {{-- Akhir Admin Page --}}

  {{-- User Page --}}
  @if (Auth::user()->role == 'user')

  {{-- Navbar --}}
  <div class="bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
              <a class="navbar-brand active text-uppercase fw-semibold" href="#">Warehouse</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item text-danger">
                    <a class="btn btn-sm btn-danger active text-uppercase fw-semibold" href="/logout" aria-current="page">
                        Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  {{-- Akhir Navbar --}}

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">

        <h3 class="ms-2">Tabel All Transaction</h3>

        <div class="d-flex justify-content-end mt-3">
          <a href="" class="btn btn-sm btn-success active text-uppercase fw-semibold mx-2 p-2">Check Barang Keluar</a>
          <a href="" class="btn btn-sm btn-success active text-uppercase fw-semibold mx-2 p-2">Check Barang Masuk</a>
          <a href="" class="btn btn-sm btn-success active text-uppercase fw-semibold mx-2 p-2">Check Jumlah Barang</a>
          <a href="" class="btn btn-sm btn-success active text-uppercase fw-semibold mx-2 p-2">Check Status</a>
        </div>
        
        <div class="table-responsive my-3">
          <table class="table table-bordered table-responsive table-hover table-striped table-sm table-md table-lg">
            <thead class="bg-warning">
              <tr>
                <th class="text-center">Jenis Barang</th>
                <th class="text-center">User Input</th>
                <th class="text-center">Transaction</th>
                <th class="text-center">Jumlah Barang</th>
                <th class="text-center">Description</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Create Up</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endif
  {{-- Akhir User Page --}}

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>