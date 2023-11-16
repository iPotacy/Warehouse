@extends('admin.index')
@section('admin')
<div class="card m-5">
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h5 class="card-title">Form Update</h5>
        <!-- No Labels Form -->
        <form method="POST" action="{{ route('barang.update',$row->id) }}" 
          enctype="multipart/form-data">
        @csrf
        @method('PUT') 
            <div class="col-md-12">
                <label for="basic-url" class="form-label">Tittle</label>
                <input type="text" class="form-control" name="title" value="{{ $row->title }}" placeholder="Nama Barang">
            </div>
            <div class="form-group">
                <label for="status">Status:</label><br>
                <label><input type="radio" name="status" value="1" {{ $row->status == 1 ? 'checked' : '' }}> Aktif</label>
                <label><input type="radio" name="status" value="0" {{ $row->status == 0 ? 'checked' : '' }}> Non-Aktif</label>
            </div>
            <hr/>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                <a href="{{ url('/barang') }}" class="btn btn-secondary btn-sm">Batal</a>
            </div>
        </form><!-- End No Labels Form -->
    </div>
</div>
@endsection
