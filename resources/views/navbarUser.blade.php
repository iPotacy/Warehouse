<div class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand active text-uppercase fw-semibold text-warning" href="#">Warehouse</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="dropdown d-flex justify-content-end mt-3">
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 10px;">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
                  Dropdown 
                </button>
             
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{url('/cekBarangOut')}}">Record Out</a></li>
                    <li><a class="dropdown-item" href="{{url('user/cekBarangIn')}}">Record In</a></li>
                    <li><a class="dropdown-item" href="{{url('/cekBarangJumlah')}}">Quantity Item</a></li>
                </ul>
              </ul>
            </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 10px;">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item text-danger">
                      <a class="btn btn-sm btn-danger active text-uppercase fw-semibold" href="/logout" aria-current="page">
                          Logout
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
             
              </div>
            </nav>
          </div>
        </div>
      </div>
  </div>