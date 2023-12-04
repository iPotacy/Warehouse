<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2">Warehouse</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    @if ( Auth::user()->role == 'admin')  
    <li class="menu-item">
      <a href="{{ url('/admin') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <!-- Feature -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Feature</span></li>
    <!-- Cards -->
    <li class="menu-item">
      <a href="{{ url('/transaksi') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-line-chart"></i>
        <div data-i18n="Basic">Transaction</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ url('/barang') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cabinet"></i>
        <div data-i18n="Basic">Items</div>
      </a>
    </li>
    <!-- Feature -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Data</span></li>
    <!-- Cards -->
    <li class="menu-item">
      <a href="{{ url('/users') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Basic">User</div>
      </a>
    </li>
    @endif
    @if ( Auth::user()->role == 'user')  
    <li class="menu-item">
      <a href="{{ url('/user') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <!-- Feature -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Feature</span></li>
    <!-- Cards -->
    <li class="menu-item">
      <a href="{{ url('/record') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-line-chart"></i>
        <div data-i18n="Basic">Record</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ url('/view') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cabinet"></i>
        <div data-i18n="Basic">Items</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ url('/stock') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cabinet"></i>
        <div data-i18n="Basic">Stock</div>
      </a>
    </li>
    @endif
  </ul>
</aside>