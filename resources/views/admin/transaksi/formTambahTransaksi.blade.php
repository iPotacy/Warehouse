@extends('admin.index')
@section('admin')

<div class="container">
<h3 class="container text-center ms-2 mt-5">Input Transaction</h3>
<div class="row">
  <div class="col-md-6">
    <div class="container px-4 my-5">
      <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
          <label class="form-label text-white" for="item">Item</label>
          <select class="form-select" name="m_barang" aria-label="Item">
            <option value="Choose Item">Choose Item</option>
            @foreach($mBarang as $mb)
            <option value="{{ $mb->id }}">{{ $mb->title }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
            <label class="form-label text-white" for="users">Users</label>
            <select class="form-select" name="users" aria-label="Users">
              <option value="Choose Users">Choose Users</option>
              @foreach($users as $u)
              <option value="{{ $u->id }}">{{ $u->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label text-white" for="transaction">Transaction</label>
            <select class="form-select" name="m_transaction" aria-label="Transaction">
              <option value="Choose Transaction">Choose Transaction</option>
              @foreach($mTransaction as $mt)
              <option value="{{ $mt->id }}">{{ $mt->title }}</option>
              @endforeach
            </select>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-6">
    <div class="container px-4 my-5">
      <form id="contactForm" data-sb-form-api-token="API_TOKEN">
          <div class="mb-3">
              <label class="form-label text-white" for="quantity">Quantity</label>
              <input class="form-control" id="quantity" type="text" placeholder="Quantity" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="quantity:required">Quantity is required.</div>
          </div>
          <div class="mb-3">
              <label class="form-label text-white" for="description">Description</label>
              <textarea class="form-control" id="description" type="text" placeholder="Description" style="height: 10rem;" data-sb-validations="required"></textarea>
              <div class="invalid-feedback" data-sb-feedback="description:required">Description is required.</div>
          </div>
          <div class="mb-3">
              <label class="form-label text-white" for="status">Status</label>
              <select class="form-select" name="m_status" aria-label="Status">
              @foreach ( $mStatus as $ms )
              <option value="{{ $ms->id }}">{{ $ms->title }}</option>
              @endforeach
          </div>
      </form>
    </div>
  </div>
  <div>
    <button class="btn btn-sm btn-primary active text-uppercase fw-semibold mx-2 p-2" id="submitButton" type="submit">Submit</button>
    <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger active text-uppercase fw-semibold mx-2 p-2">Back</a>
  </div>
</div>
</div>
@endsection
