@extends('layoutDashboard')

@section('content')

<h1 class="h4 text-gray-800">List Inventory</h1>

@if ($messages = Session::get('success'))
<p>{{ $messages}}</p>
@endif

<div style="overflow: auto;">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Inventory</td>
                <td>Jumlah</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($inventorys as $inventory)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$inventory->inventory_name}}</td>
                <td>{{$inventory->jumlah}}</td>
                <td>
                    <a href="#" class="badge rounded-pill bg-warning text-dark">Tambah</a>
                    <a href="#" class="badge rounded-pill bg-success text-white">Kurang</a>
                    <a href="#" class="badge rounded-pill bg-danger text-white">Reset</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection