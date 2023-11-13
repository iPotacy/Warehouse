<div id="header" class="header-nav">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
  
        <nav id="header" class="navbar navbar-expand-lg navbar-light header-nav ms-auto">
          <h2 class="text-blue">logo</h2>
            <ul class="d-flex align-items-center ms-auto">
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
              @endif
              
              @if (Auth::user()->role == 'user')
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/user') }}">Home</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" href="{{ url('/view') }}">Check Barang</a>
              </li>
              @endif
              <li class="nav-item me-4">
                <a class="nav-link" href="/logout">
                  <i class="bi bi-box-arrow-right"> Sign Out</i>
                </a>
              </li>

            </ul>
        </nav>
  
      </div>
    </div>
  </div>
</div>