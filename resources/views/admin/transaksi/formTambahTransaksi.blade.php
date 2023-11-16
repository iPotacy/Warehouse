@extends('admin.index')
@section('admin')

<div class="container">
  <div class="text-center mt-5">
  </div>
  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="container">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
          <div class="controls">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="item">Item</label>
                  <select class="form-select" name="m_barang" aria-label="Item">
                    <option value="Choose Item">Choose Item</option>
                    @foreach($mBarang as $mb)
                    <option value="{{ $mb->id }}">{{ $mb->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="transaction">Transaction</label>
                  <select class="form-select" name="m_transaction" aria-label="Transaction">
                    <option value="Choose Transaction">Choose Transaction</option>
                    @foreach($mTransaction as $mt)
                    <option value="{{ $mt->id }}">{{ $mt->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="users">Users</label>
                  <select class="form-select" name="users" aria-label="Users">
                    <option value="Choose Users">Choose Users</option>
                    @foreach($users as $u)
                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="status">Status</label>
                  <select class="form-select" name="m_status" aria-label="Status">
                    @foreach ($mStatus as $ms)
                    <option value="{{ $ms->id }}">{{ $ms->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="quantity">Quantity</label>
                  <input class="form-control" id="quantity" type="text" placeholder="quantity" data-sb-validations="required">
                  <div class="invalid-feedback" data-sb-feedback="quantity:required">Quantity is required.</div>
                </div>
              </div>
                <div class="form-group">
                  <label class="form-label text-white" for="description">Description</label>
                  <textarea class="form-control" id="description" type="text" placeholder="Description" style="height: 10rem;" data-sb-validations="required"></textarea>
                  <div class="invalid-feedback" data-sb-feedback="description:required">Description is required.</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mt-4">
                <button class="btn btn-sm btn-primary active text-uppercase fw-semibold mx-2 p-2" id="submitButton" type="submit">Submit</button>
                <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger active text-uppercase fw-semibold mx-2 p-2">Back</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
