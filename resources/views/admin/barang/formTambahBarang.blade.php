@extends('admin.index')
@section('admin')

<div class="container form-container">
  <div class="text-center mt-5">
  </div>
  <form id="contactForm" method="POST" action="{{route('barang.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="controls">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="form-group">
            <label class="form-label text-white" for="titleItem">Title Item</label>
            <input class="form-control" name="title" type="text" placeholder="Title Item" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="titleItem:required">Title Item is required.</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mt-4 mx-auto">
          <div class="form-group">
            <label class="form-label d-block text-white">Status</label>
            <div class="form-check">
              <input class="form-check-input" id="aktif" type="radio" name="status" value="1" data-sb-validations="required" />
              <label class="form-check-label text-white" for="aktif">aktif</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" id="tidakAktif" type="radio" name="status" value="0" data-sb-validations="required" />
              <label class="form-check-label text-white" for="tidakAktif">tidak aktif</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mt-4 mx-auto">
          <button class="btn btn-sm btn-primary active text-uppercase fw-semibold mx-2 p-2" id="submitButton" type="submit">Submit</button>
          <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger active text-uppercase fw-semibold mx-2 p-2">Back</a>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection