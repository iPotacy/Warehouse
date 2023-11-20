@extends('user.index')
@section('user')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Description','Receiver','Status','Create Up'];
  $no = 1;
@endphp
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="panel">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col col-md-12">
                          <h4>Data</h4>
                      </div>
                  </div>
              </div>

              <div class="panel-body table-responsive">
                  <table id="example" class="table table-hover table-bordered">
                      <thead class="bg-dark text-warning">
                        <tr>
                          @foreach($ar_judul as $jdl)
                            <th style="background-color: #b8c1ec">{{$jdl}}</th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($vBarang as $tb)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $tb->title_barang }}</td>
                          <td>{{ $tb->name }}</td>
                          <td>{{ $tb->title_transaction }}</td>
                          <td>{{ $tb->quantity }}</td>
                          <td>{{ $tb->description }}</td>
                          <td>{{ $tb->receiver }}</td>
                          <td>{{ $tb->title_status }}</td>
                          <td>{{ $tb->created_at }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection