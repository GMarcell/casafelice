@extends('layoutDashboard')

@section('content')

<h1 class="h4 text-gray-800">List inventori</h1>

@if ($messages = Session::get('success'))
<p>{{ $messages}}</p>
@endif

<div style="overflow: auto;">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Keterangan</td>
                <td>Type</td>
                <td>Banyak Barang</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($inventori as $inven)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$inven->keterangan}}</td>
                <td>{{$inven->type}}</td>
                <td>{{$inven->banyak_barang}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection