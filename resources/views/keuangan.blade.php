@extends('layoutDashboard')

@section('content')

<h1 class="h4 text-gray-800">Laporan Keuangan</h1>

<div style="overflow: auto;">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Keterangan</td>
                <td>Pemasukan</td>
                <td>Pengeluaran</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($bookings as $booking)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$booking->name}}</td>
                <td>{{$booking->check_in_date}}</td>
                <td>{{$booking->check_out_date}}</td>
                <td>{{$booking->type}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection