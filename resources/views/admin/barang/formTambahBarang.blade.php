@extends('admin.index')
@section('content')
@php
  $ar_judul = ['NO','Title','Status'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="container text-center ms-2 mt-5">Input Item</h3>
      <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="mb-3">
                <label class="form-label" for="tittleItem">Tittle Item</label>
                <input class="form-control" id="tittleItem" type="text" placeholder="Tittle Item" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="tittleItem:required">Tittle Item is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check">
                    <input class="form-check-input" id="aktif" type="radio" name="status" data-sb-validations="required" />
                    <label class="form-check-label" for="aktif">aktif</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="tidakAktif" type="radio" name="status" data-sb-validations="required" />
                    <label class="form-check-label" for="tidakAktif">tidak aktif</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
            </div>
            <div class="d-flex justify-content-center">
              <button class="btn btn-sm btn-primary active text-uppercase fw-semibold mx-2 p-2" name="proses" type="submit" value="simpan">Simpan</button>
                <a href="{{url('/admin')}}" class="btn btn-sm btn-danger active text-uppercase fw-semibold mx-2 p-2">Back</a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection