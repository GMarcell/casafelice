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
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($inventorys as $inventory)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$inventory->inventory_name}}</td>
                <td>{{$inventory->banyak_barang}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection