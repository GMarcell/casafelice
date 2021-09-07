@extends('layoutDashboard')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Add Action Form</h1>
<hr>

@if(session('errors'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="{{ url('addaction') }}">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="inventory_type" class="label-form">Tipe Inventory:</label><br>
            <select id="inventory_type" class="form-control" name="inventory_type">
                <option value="" disabled selected> Choose Inventory Type</option>
                <option value="1">Kamar</option>
                <option value="2">Perlengkapan Mandi</option>
                <option value="3">Listrik</option>
                <option value="4">Alat Komunikasi</option>
                <option value="5">Ruang Tamu & Ruang Bersama</option>
                <option value="6">Receptionis</option>
                <option value="7">Dapur</option>
                <option value="8">Laundry</option>
                <option value="9">Meja & Kursi</option>
                <option value="10">Cadangan Material Gedung</option>
                <option value="11">Transportasi</option>
                <option value="12">Assesoris</option>
                <option value="13">Kunci Bangunan</option>
                <option value="14">Lainnya</option>
            </select>
        </div>

        <div class="form-group">
            <label for="inventory_action_type" class="label-form">Tipe Tindakan:</label><br>
            <select id="inventory_action_type" class="form-control" name="inventory_action_type">
                <option value="" disabled selected> Choose Action Type</option>
                <option value="1">Barang Masuk</option>
                <option value="2">Barang Keluar</option>
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah" class="label-form">Banyak Barang:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah">
        </div>

        <button type="submit" class="btn bg-gold btn-xl text-uppercase" style="color: antiquewhite;">
            <strong>SUBMIT</strong>
        </button>
    </div>
</form>

@endsection