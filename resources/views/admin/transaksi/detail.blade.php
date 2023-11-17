@extends('admin.index')
@section('admin')
<div class="card col-md-5 mx-auto my-5">
  <div class="card-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <p class="my-2" style="font-size: 30px;">Data Transaction</p>
        </div>
        <div class="col-md-2">
          <a href="{{ url('generate/'. $show->id) }}" class="btn btn-danger btn-sm my-3" title="Export to PDF">
            <i class="bi bi-file-earmark-pdf"></i> PDF
          </a>
        </div>
      </div>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-muted mt-1"><span class="text-black">Transaction</span> #{{ $show->id }}</li>
          <li class="text-black">{{ $show->created_at }}</li>
        </ul>
        <hr>
        <div class="col-md-10">
          <p>Items</p>
        </div>
        <div class="col-md-2">
          <p class="float-end">{{ $show->title_barang }}
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-8">
          <p>Transaction</p>
        </div>
        <div class="col-md-4">
          <p class="float-end">{{ $show->title_transaction }}
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-9">
          <p>Receiver</p>
        </div>
        <div class="col-md-3">
          <p class="float-end">{{ $show->receiver }}
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p>Description </p>
        </div>
        <div class="col-md-9">
          <div class="text-end textarea-style form-control" contenteditable="true">{{ $show->description }}
          </div>
        </div>
      </div>
      <div class="row text-black my-3 ">
        <hr style="border: 1px solid black;">
        <div class="col-xl-12">
          <p class="float-end fw-bold">Total: {{ $show->quantity }}
          </p>
        </div>
        <hr style="border: 1px solid black;">
        <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger active text-uppercase fw-semibold p-2">Back</a>
      </div>
    </div>
  </div>
</div>
@endsection