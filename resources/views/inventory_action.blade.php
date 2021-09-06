@extends('layoutDashboard')

@section('content')

<h1 class="h4 text-gray-800">List Inventory Action</h1>

@if ($messages = Session::get('success'))
<p>{{ $messages}}</p>
@endif

<div style="overflow: auto;">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Inventory</td>
                <td>Tindakan</td>
                <td>banyak_barang</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($invAction as $invAction)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$invAction->inventory_name}}</td>
                <td>{{$invAction->inventory_action_name}}</td>
                <td>{{$invAction->banyak_barang}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection