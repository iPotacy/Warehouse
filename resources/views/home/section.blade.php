<section id="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="text-system">SYSTEM MANAGEMENT WAREHOUSE</p>
                <p>apa aja</p>
                @if (Auth::user()->role == 'admin')
                <a href="{{ route('transaksi.index') }}" class="btn btn-user"> <i class="bi bi-house-check"></i>Transaction</a>
                @endif
                @if (Auth::user()->role == 'user')
                <a href="{{ route('view.index') }}" class="btn btn-user"> <i class="bi bi-house-check"></i>Check</a>
                @endif
            </div>
            <div class="col-md-5 text-center">
                <img src="{{ asset ('backend/assets/img/warehouse.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <img src="{{ asset ('backend/assets/img/header.png')}}" class="bottom-img" alt="">
</section>