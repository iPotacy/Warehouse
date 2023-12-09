@php
$ar_judul = ['No','Item','Status','Create Up'];
$no = 1;
@endphp
<h3 align="center">Daftar Items</h3>
<br/><br/>
<table border="1" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
          @foreach($ar_judul as $jdl)
          <th>{{ $jdl }}</th>
          @endforeach
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($vBarang as $tb)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $tb->title }}</td>
          @if ($tb->status === 1)
          <td><span class="badge bg-label-success me-1">Active</span></td>
          @else
          <td><span class="badge bg-label-danger me-1">Not Active</span></td>
          @endif
          <td>{{ $tb->created_at->format('d-m-Y') }}</td>
        </tr>
        @endforeach
      </tbody>
</table>