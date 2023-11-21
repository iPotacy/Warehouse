@extends('user.index')
@section('user')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Description','Receiver','Status','Create Up'];
  $no = 1;
@endphp


<div class="container">
    <a href="{{ url('/record') }}">
        <button type="submit" class="btn btn-primary">Reset</button>
    </a>
    <form action="{{ route('excel') }}" method="get">
        <input type="hidden" name="date_from" class="form-control" value="{{ $request->date_from }}">
        <input type="hidden" name="date_to" class="form-control" value="{{ $request->date_to }}">
        <a class="btn btn-primary" href="{{ url('excel?date_from='.$request->date_from.'&date_to='.$request->date_to) }}">Export Excel</a>
    </form>
    <form action="{{ route('filter') }}" method="get">
        <div class="row">
           <div class="col-md-4 form-group">
               <label for="">Date From</label>
               <input type="date" name="date_from" class="form-control" value="{{ $request->date_from }}">
            </div>
            <div class="col-md-4 form-group">
               <label for="">Date From</label>
               <input type="date" name="date_to" class="form-control" value="{{ $request->date_to }}">
            </div>
            <div class="col-md-2 form-group" style="margin-top:25px;">
               <input type="submit" class="btn btn-primary" value="Search">
            </div>
        </div>
   </form>
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