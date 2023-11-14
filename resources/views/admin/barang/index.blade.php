@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Title','Status','Created At'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h3 class="ms-2 mt-5">All Items</h3>

      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal">
        <i class="bi bi-clipboard-plus"></i> Tambah
    </button>
    <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Add Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <br/>
                            <!-- No Labels Form -->
                            <form class="row g-3" method="POST" action="{{ route('barang.create') }}">
                                @csrf
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama" placeholder="Item Name">
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
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </form><!-- End No Labels Form -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div><!-- End Basic Modal-->


      <div class="table-responsive my-3">
        <table class="table table-bordered table-responsive table-hover table-striped table-sm table-md table-lg">
          <thead class="bg-dark text-warning">
            <tr>
              @foreach($ar_judul as $jdl)
                <th class="text-center" style="white-space: nowrap;">{{$jdl}}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach($mBarang as $mb)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $mb->title }}</td>
              <td>{{ $mb->status }}</td>
              <td>{{ $mb->created_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
</div>
@endsection