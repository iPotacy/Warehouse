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
    $ar_judul = ['NO','Items','Transaction','Quantity'];
    $no = 1;
  @endphp
  {{-- Admin Page --}}
  @if (Auth::user()->role == 'user')
  {{-- Navbar --}}
  @include('navbarUser')
  {{-- Akhir Navbar --}}

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h3 class="ms-2 mt-5">Check Quantity</h3>

        <div class="d-flex justify-content-end mt-3">
          <a href="{{url('/admin')}}" class="btn btn-sm btn-danger active text-uppercase fw-semibold mx-2 p-2">Back</a>
        </div>

        <div class="table-responsive my-3">
          <table class="table table-bordered table-responsive table-hover table-striped table-sm table-md table-lg">
            <thead class="bg-warning">
              <tr>
                @foreach($ar_judul as $jdl)
                  <th class="text-center" style="white-space: nowrap;">{{$jdl}}</th>
                @endforeach
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>
  @endif
  {{-- Akhir Admin Page --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
</body>
</html>