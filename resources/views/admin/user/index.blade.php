@extends('admin.index')
@section('admin')
@php
  $ar_judul = ['No','Title','Email','Role','Action'];
  $no = 1;
@endphp

<h4 class="fw-bold py-1 mt-3 ms-4"><span class="text-muted fw-light">Check User/</span> User</h4>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="container flex-grow-1 mb-4 mt-4">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/register') }}"><i class="bx bx-plus me-1"></i> Add...</a>
          </li>
        </ul>
      </div>
      <div class="card-datatable table-responsive">
        <table class="dataTable datatables-basic table table-striped border-top">
          <thead>
            <tr>
              @foreach($ar_judul as $jdl)
              <th>{{ $jdl }}</th>
              @endforeach
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($data as $du)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $du->name }}</td>
              <td>{{ $du->email }}</td>
              <td>{{ $du->role }}</td>
              <td>
                <form method="POST" action="{{ route('users.destroy', ['id' => $du->id]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('users.edit', ['id' => $du->id]) }}">
                        <i class="bx bx-edit-alt me-1"></i>Edit
                      </a>
                      <button type="submit" class="dropdown-item" onclick="confirmDelete({{ $du->id }})">
                        <i class="bx bx-trash me-1"></i>Delete
                      </button>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection