@extends('admin.index')
@section('admin')

<div class="container">
  <div class="text-center mt-5">
  </div>
  <div class="row">
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="col-lg-7 mx-auto">
      <div class="container">
        <form id="contactForm" method="POST" action="{{ route('transaksi.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="controls">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="item">Item</label>
                  <select class="form-select" name="m_barang_id" aria-label="Item">
                    <option value="Choose Item">Choose Item</option>
                    @foreach($mBarang as $mb)
                    @php $barang = ( old('m_barang_id') == $mb->id ) ? 'selected' : ''; @endphp
                    <option value="{{ $mb->id }}">{{ $mb->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="transaction">Transaction</label>
                  <select class="form-select" name="m_transaction_id" aria-label="Transaction">
                    <option value="Choose Transaction">Choose Transaction</option>
                    @foreach($mTransaction as $mt)
                    @php $transaction = ( old('m_transaction_id') == $mt->id ) ? 'selected' : ''; @endphp
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
                  <select class="form-select" name="m_user_id" aria-label="Users">
                    <option value="Choose Users">Choose Users</option>
                    @foreach($users as $u)
                    @php $users = ( old('m_user_id') == $u->id ) ? 'selected' : ''; @endphp
                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="status">Status</label>
                  <select class="form-select" name="m_status_id" aria-label="Status">
                    <option value="Choose Users">Choose Users</option>
                    @foreach ($mStatus as $ms)
                    @php $status = ( old('m_status_id') == $ms->id ) ? 'selected' : ''; @endphp
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
                  <input name="quantity" class="form-control" id="quantity" type="text" placeholder="quantity" data-sb-validations="required">
                  <div class="invalid-feedback" data-sb-feedback="quantity:required">Quantity is required.</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label text-white" for="receiver">Receiver</label>
                  <input name="receiver" class="form-control" id="receiver" type="text" placeholder="receiver" data-sb-validations="required">
                  <div class="invalid-feedback" data-sb-feedback="receiver:required">Receiver is required.</div>
                </div>
              </div>
                <div class="form-group">
                  <label class="form-label text-white" for="description">Description</label>
                  <textarea name="description" class="form-control" id="description" type="text" placeholder="Description" style="height: 10rem;" data-sb-validations="required"></textarea>
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
