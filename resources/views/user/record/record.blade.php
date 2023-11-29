@extends('user.index')
@section('user')
@php
  $ar_judul = ['No','Item','User','Transaction','Quantity','Receiver','Status','Create Up'];
  $no = 1;
@endphp

<h4 class="fw-bold py-1 mt-3 ms-4"><span class="text-muted fw-light">Check Record /</span> Record</h4>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-datatable table-responsive">
                <div class="card-header flex-column flex-md-row">
                    <div class="row align-items-end">
                        <h5 class="card-header">Check byDate</h5>
                        <div class="col-md-9">
                            <form id="contactForm" action="{{ route('filter') }}" method="get">
                                <div class="row align-items-end">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="date_from" class="mr-2">Date From</label>
                                                <input type="date" name="date_from" class="form-control" value="{{ $request->date_from }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="date_to" class="mr-2">Date To</label>
                                                <input type="date" name="date_to" class="form-control" value="{{ $request->date_to }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3 text-end">
                                <a href="{{ url('/record') }}" class="btn btn-secondary mr-2">Reset</a>
                                <form action="{{ route('excel') }}" method="get" style="display: inline-block;">
                                    <input type="hidden" name="date_from" class="form-control" value="{{ $request->date_from }}">
                                    <input type="hidden" name="date_to" class="form-control" value="{{ $request->date_to }}">
                                    <button type="submit" class="btn btn-success">Export</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="dataTable datatables-basic table table-striped border-top">
                        <thead>
                            <tr>
                                @foreach($ar_judul as $jdl)
                                    <th>{{$jdl}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rBarang as $record)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $record->title_barang }}</td>
                                    <td>{{ $record->name }}</td>
                                    @if ($record->title_transaction === 'Barang Masuk')
                                    <td>
                                        <span class="badge bg-label-info me-1">Masuk</span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge bg-label-warning me-1">Keluar</span>
                                    </td>
                                    @endif
                                    <td>{{ $record->quantity }}</td>
                                    <td>{{ $record->receiver }}</td>
                                    @if ($record->title_status === 'Masuk')
                                    <td>
                                        <span class="badge bg-label-success me-1">Received</span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge bg-label-danger me-1">Dispatched</span>
                                    </td>
                                    @endif
                                    <td>{{ $record->created_at->format('d-m-Y') }}</td>
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

