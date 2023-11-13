@extends('admin.index')
@section('admin')
  @php
    $ar_judul = ['NO','Title','Status'];
    $no = 1;
  @endphp

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h3 class="container text-center ms-2 mt-5">Input Transaction</h3>

        <div class="d-flex justify-content-end mt-3">
        </div>

        <div class="container px-5 my-5">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="mb-3">
                    <label class="form-label" for="item">Item</label>
                    <select class="form-select" id="item" aria-label="Item">
                        <option value="Choose Item">Choose Item</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="users">Users</label>
                    <select class="form-select" id="users" aria-label="Users">
                        <option value="Choose Users">Choose Users</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="transaction">Transaction</label>
                    <select class="form-select" id="transaction" aria-label="Transaction">
                        <option value="Choose Transaction">Choose Transaction</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="quantity">Quantity</label>
                    <input class="form-control" id="quantity" type="text" placeholder="Quantity" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="quantity:required">Quantity is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" type="text" placeholder="Description" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="description:required">Description is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" id="status" aria-label="Status">
                        <option value="Choose Status">Choose Status</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-sm btn-primary active text-uppercase fw-semibold mx-2 p-2" id="submitButton" type="submit">Submit</button>
                    <a href="{{ url('/admin') }}" class="btn btn-sm btn-danger active text-uppercase fw-semibold mx-2 p-2">Back</a>
                </div>
            </form>
        </div>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
      </div>
    </div>
  </div>
@endsection