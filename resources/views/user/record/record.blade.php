@extends('user.index')
@section('user')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Description','Receiver','Status','Create Up'];
  $no = 1;
@endphp

<div class="container">
    <div class="row py-3 ms-3">
        <div class="col-md-4 text-right">
            <a href="{{ url('/record') }}" class="btn btn-secondary mr-2">Reset</a>
            <form action="{{ route('excel') }}" method="get" style="display: inline-block;">
                <input type="hidden" name="date_from" class="form-control" value="{{ $request->date_from }}">
                <input type="hidden" name="date_to" class="form-control" value="{{ $request->date_to }}">
                <button type="submit" class="btn btn-success">Export Excel</button>
            </form>
        </div>
    </div>
    <form action="{{ route('filter') }}" method="get" class="form-inline">
        <div class="row ms-3">
            <div class="form-group col-md-3">
                <label for="date_from" class="mr-2">Date From</label>
                <input type="date" name="date_from" class="form-control" value="{{ $request->date_from }}">
            </div>
            <div class="form-group col-md-3">
                <label for="date_to" class="mr-2">Date To</label>
                <input type="date" name="date_to" class="form-control" value="{{ $request->date_to }}">
            </div>
            <div class="col-md-2 form-group" style="margin-top:25px;">
                <input type="submit" value="Search" class="btn btn-primary">
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
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $record->title_barang }}</td>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->title_transaction }}</td>
                                    <td>{{ $record->quantity }}</td>
                                    <td>{{ $record->description }}</td>
                                    <td>{{ $record->receiver }}</td>
                                    @if ($record->title_status === 'Masuk')
                                    <td><span class="badge bg-success">{{ $record->title_status }}</span></td>
                                    @else
                                    <td><span class="badge bg-danger">{{ $record->title_status }}</span></td>
                                    @endif
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
