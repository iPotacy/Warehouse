<div class="card col-md-5 mx-auto my-5">
  <div class="card-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <p class="my-2" style="font-size: 30px;">Data Transaction</p>
        </div>
      </div>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-muted mt-1"><span class="text-black">Transaction</span> #{{ $generate->id }}</li>
          <li class="text-black">{{ $generate->created_at }}</li>
        </ul>
        <hr>
        <div class="col-md-10">
          <p>Items</p>
        </div>
        <div class="col-md-2">
          <p class="float-end">{{ $generate->title_barang }}
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-9">
          <p>Transaction</p>
        </div>
        <div class="col-md-3">
          <p class="float-end">{{ $generate->title_transaction }}
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-9">
          <p>Receiver</p>
        </div>
        <div class="col-md-3">
          <p class="float-end">{{ $generate->receiver }}
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p>Description </p>
        </div>
        <div class="col-md-9">
          <div class="text-end textarea-style form-control" contenteditable="true">{{ $generate->description }}
          </div>
        </div>
      </div>
      <div class="row text-black my-3">
        <hr style="border: 1px solid black;">
        <div class="col-xl-12">
          <p class="float-end fw-bold">Total: {{ $generate->quantity }}
          </p>
        </div>
        <hr style="border: 1px solid black;">
      </div>

    </div>
  </div>
</div>