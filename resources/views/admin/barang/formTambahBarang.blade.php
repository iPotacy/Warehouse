@extends('admin.index')
@section('admin')

<h4 class="fw-bold py-1 mt-3 ms-4 "><span class="text-muted fw-light">Add Item/</span> Item</h4>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <form id="contactForm" method="POST" action="{{route('barang.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-5">
          <div class="card mb-4">
            <h5 class="card-header">Add Item</h5>
            <div class="card-body">
              <div>
                <label for="defaultFormControlInput" class="form-label">Item</label>
                <input
                  name="title"
                  type="text"
                  class="form-control"
                  id="defaultFormControlInput"
                  placeholder="Item"
                  aria-describedby="defaultFormControlHelp"
                />
              </div>
              <div class="row gy-3">
                <div class="col-md">
                  <div class="form-check mt-3">
                    <input
                      name="status"
                      class="form-check-input"
                      type="radio"
                      value="1"
                      id="defaultRadio1"
                    />
                    <label class="form-check-label" for="defaultRadio1"> Active </label>
                  </div>
                  <div class="form-check">
                    <input
                      name="status"
                      class="form-check-input"
                      type="radio"
                      value="0"
                      id="defaultRadio2"
                      checked
                    />
                    <label class="form-check-label" for="defaultRadio2"> Not Active </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="container flex-grow-1 mb-4 mt-1">
              <div class="demo-inline-spacing">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ url('/barang') }}" class="btn btn-dark">Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection