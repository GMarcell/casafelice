@extends('layoutDashboard')

@section('content')

<h1 class="h4 text-gray-800">Bookkeeping</h1>

@if ($messages = Session::get('success'))
<p>{{ $messages}}</p>
@endif

<div style="overflow: auto;">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Tanggal</td>
                <td>Keterangan</td>
                <td>Pengeluaran</td>
                <td>Pemasukan</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($bookkeeping as $keep)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$keep->created_at}}</td>
                <td>{{$keep->keterangan}}</td>
                <td>{{$keep->pengeluaran}}</td>
                <td>{{$keep->pemasukan}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3">Total</td>
                <td>{{$totalpengeluaran}}</td>
                <td>{{$totalpemasukan}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection