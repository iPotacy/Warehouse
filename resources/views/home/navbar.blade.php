<div id="header" class="header-nav">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
  
        <nav id="header" class="navbar navbar-expand-lg navbar-light header-nav ms-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h2 class="text-blue">logo</h2>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              @if (Auth::user()->role == 'admin')
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/admin') }}">Home</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/transaksi') }}">Transaction</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/barang') }}">Items</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/users') }}">User</a>
              </li>
              @endif
              
              @if (Auth::user()->role == 'user')
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/user') }}">Home</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/view') }}">Items</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/record') }}">Record</a>
              </li>
              @endif
              <li class="nav-item me-4">
                <a class="nav-link" href="/logout">
                  <i class="bi bi-box-arrow-right"> Sign Out</i>
                </a>
              </li>

            </ul>
          </div>
        </nav>
  
      </div>
    </div>
  </div>
</div>