@extends('admin.index')
@section('admin')
<h4 class="fw-bold py-1 mt-3 ms-4 "><span class="text-muted fw-light">Update User/</span> User</h4>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <form id="contactForm" method="POST" action="{{ route('users.update',$row->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT') 
      <div class="row">
        <div class="col-md-5">
          <div class="card mb-4">
            <h5 class="card-header">Add Item</h5>
            <div class="card-body">
              <div>
                <label for="defaultFormControlInput" class="form-label">Username</label>
                <input
                name="name"
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="Username"
                aria-describedby="defaultFormControlHelp"
                value="{{ $row->name }}"
                />
              </div>
              <div class="mt-2 mb-2">
                <label for="defaultFormControlInput" class="form-label">Email</label>
                <input
                name="email"
                type="text"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="Email"
                aria-describedby="defaultFormControlHelp"
                value="{{ $row->email }}"
                />
              </div>
              <div class="form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                <input
                type="password"
                id="password"
                class="form-control"
                name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password"
                />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="row gy-3 mt-2">
                <div class="col-md">
                    <small class="text-light fw-semibold">Admin | User</small>
                  <div class="form-check mt-3">
                    <input
                      name="role"
                      class="form-check-input"
                      type="radio"
                      value="admin"
                      id="defaultRadio1"
                      value="admin" 
                      {{ $row->role == 'admin' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="defaultRadio1"> Admin </label>
                  </div>
                  <div class="form-check">
                    <input
                      name="role"
                      class="form-check-input"
                      type="radio"
                      value="user"
                      id="defaultRadio2"
                      value="user" 
                      {{ $row->role == 'user' ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="defaultRadio2"> User </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="container flex-grow-1 mb-4 mt-1">
              <div class="demo-inline-spacing">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ url('/users') }}" class="btn btn-dark">Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
{{-- <div class="card m-5">
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
        <form method="POST" action="{{ route('users.update',$row->id) }}" 
          enctype="multipart/form-data">
        @csrf
        @method('PUT') 
            <div class="col-md-12">
                <label for="basic-url" class="form-label">Tittle</label>
                <input type="text" class="form-control" name="name" value="{{ $row->name }}" placeholder="Nama Barang">
            </div>
            <div class="col-md-12">
                <label for="basic-url" class="form-label">email</label>
                <input type="text" class="form-control" name="email" value="{{ $row->email }}" placeholder="Nama Barang">
            </div>
            <div class="form-group">
              <label for="status">Status:</label><br>
              <label><input type="radio" name="role" value="admin" {{ $row->role == 'admin' ? 'checked' : '' }}> Aktif</label>
              <label><input type="radio" name="role" value="user" {{ $row->role == 'user' ? 'checked' : '' }}> Non-Aktif</label>
            </div>
            <div class="col-md-12">
                <label for="basic-url" class="form-label">email</label>
                <input type="text" class="form-control" name="password" placeholder="Nama Barang">
            </div>
            <hr/>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                <a href="{{ url('/users') }}" class="btn btn-secondary btn-sm">Batal</a>
            </div>
        </form><!-- End No Labels Form -->
    </div>
</div> --}}
@endsection
