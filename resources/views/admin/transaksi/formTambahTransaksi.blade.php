@extends('admin.index')
@section('admin')
<h4 class="fw-bold py-1 mt-3 ms-4 "><span class="text-muted fw-light">Add Transaction/</span> Transaction</h4>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <form id="contactForm" method="POST" action="{{ route('transaksi.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="col-lg-7">
        <div class="card mb-4">
          <h5 class="card-header">Form Controls</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Items</label>
                  <select name="m_barang_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Select Items</option>
                    @foreach($mBarang as $mb)
                    @php $barang = ( old('m_barang_id') == $mb->id ) ? 'selected' : ''; @endphp
                    <option value="{{ $mb->id }}">{{ $mb->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Users</label>
                  <select name="m_user_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Select Users</option>
                    @foreach($users as $u)
                    @if($u->role == 'admin')
                      @php $selected = (old('m_user_id') == $u->id) ? 'selected' : ''; @endphp
                      <option value="{{ $u->id }}" {{ $selected }}>{{ $u->name }}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Transactions</label>
                  <select name="m_transaction_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Select Transaction</option>
                    @foreach($mTransaction as $mt)
                    @php $transaction = ( old('m_transaction_id') == $mt->id ) ? 'selected' : ''; @endphp
                    <option value="{{ $mt->id }}">{{ $mt->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Status</label>
                  <select name="m_status_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Select Status</option>
                    @foreach ($mStatus as $ms)
                    @php $status = ( old('m_status_id') == $ms->id ) ? 'selected' : ''; @endphp
                    <option value="{{ $ms->id }}">{{ $ms->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Quantity"
                    name="quantity"
                  />
                </div>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Receiver</label>
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Receiver Name"
                    name="receiver"
                  />
                </div>
              </div>
            </div>
            <div>
              <label for="exampleFormControlTextarea1" class="form-label">Description Transaction</label>
              <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <div class="container flex-grow-1 mb-4 mt-1">
            <div class="demo-inline-spacing">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{ url('/transaksi') }}" class="btn btn-dark">Back</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
