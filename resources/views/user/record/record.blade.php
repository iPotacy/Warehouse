@extends('user.index')
@section('user')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Description','Receiver','Status','Create Up'];
  $no = 1;
@endphp

<div class=" container">
  <div class="row mx-auto my-3 ">
    <div class="form-group col-md-3">
        <label class="text-white">Month</label>
        <input type="date" value="" name="fromDate" class="form-control" 
        placeholder="Input Month">
    </div> 

    <div class="form-group col-md-3">
        <label class="text-white">Years</label>
        <input type="date" value="" name="toDate" class="form-control" 
        placeholder="Input Years">
    </div>

    <div class="form-group col-md-2 mt-4">
        <button class="btn btn-primary " type="submit" name="search">Search</button>
    </div>
  </div>
</div>
            
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body table-responsive">
                <table id="example" class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        @foreach($ar_judul as $jdl)
                        <th style="background-color: #b8c1ec">{{$jdl}}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rBarang as $record)
                    <tr>
                        <td></td>
                        <td>{{ $record->title_barang }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->title_transaction }}</td>
                        <td>{{ $record->quantity }}</td>
                        <td>{{ $record->description }}</td>
                        <td>{{ $record->receiver }}</td>
                        <td>{{ $record->title_status }}</td>
                        <td>{{ $record->created_at }}</td>
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