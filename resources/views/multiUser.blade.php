<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
{{-- Untuk judul header pada tabel --}}

  @php
    $ar_judul = ['No','Item','User Input','Transaction','Quantity','Description','Receiver','Status','Create Up'];
    $no = 1;
  @endphp
  {{-- Admin Page --}}
  @if (Auth::user()->role == 'admin')
  {{-- Navbar --}}
  @include('navbarAdmin')
  {{-- Akhir Navbar --}}

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h3 class="ms-2 mt-5">All Transaction</h3>

        <div class="table-responsive my-3">
          <table class="table table-bordered table-responsive table-hover table-striped table-sm table-md table-lg">
            <thead class="bg-dark text-warning">
              <tr>
                @foreach($ar_judul as $jdl)
                  <th class="text-center" style="white-space: nowrap;">{{$jdl}}</th>
                @endforeach
              </tr>
            </thead>
            <tbody>
              @foreach($barang as $tb)
              <tr>
                <td>{{ $no++ }}</td>
				        <td>{{ $tb->m_barang_id }}</td>
                <td>{{ $tb->m_user_id }}</td>
                <td>{{ $tb->m_transaction_id }}</td>
                <td>{{ $tb->quantity }}</td>
                <td>{{ $tb->description }}</td>
                <td>{{ $tb->receiver }}</td>
                <td>{{ $tb->m_status_id }}</td>
                <td>{{ $tb->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
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
  @include('navbarUser')
  {{-- <div class="bg-warning">
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
  </div>--}}
  {{-- Akhir Navbar --}}

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">

        <h3 class="ms-2">Tabel All Transaction</h3>
        
        <div class="table-responsive my-3">
          <table class="table table-bordered table-responsive table-hover table-striped table-sm table-md table-lg">
            <thead class="bg-dark text-warning">
              <tr>
                <th class="text-center" style="white-space: nowrap;">No</th>
                <th class="text-center" style="white-space: nowrap;">Barang</th>
                <th class="text-center" style="white-space: nowrap;">User Input</th>
                <th class="text-center" style="white-space: nowrap;">Transaction</th>
                <th class="text-center" style="white-space: nowrap;">Quantity</th>
                <th class="text-center" style="white-space: nowrap;">Description</th>
                <th class="text-center" style="white-space: nowrap;">Receiver</th>
                <th class="text-center">Create Up</th>
              </tr>
            </thead>
            <tbody>
              @foreach($barang as $tb)
              <tr>
                <td>{{ $no++ }}</td>
				        <td>{{ $tb->m_barang_id }}</td>
                <td>{{ $tb->m_user_id }}</td>
                <td>{{ $tb->m_transaction_id }}</td>
                <td>{{ $tb->quantity }}</td>
                <td>{{ $tb->description }}</td>
                <td>{{ $tb->receiver }}</td>
                <td>{{ $tb->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
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