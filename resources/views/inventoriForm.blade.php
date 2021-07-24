@extends('layoutDashboard')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Inventori Form</h1>
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

<form method="post" action="{{ url('input_barang') }}">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="name" class="label-form">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan">
        </div>

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="type" class="label-form">Type:</label><br>
                <select id="type" class="form-control" name="type">
                    <option value="" disabled selected> Choose Type</option>
                    <option value="1">Kamar</option>
                    <option value="2">Perlengkapan Mandi</option>
                    <option value="3">Listrik</option>
                    <option value="4">Alat Komunikasi</option>
                    <option value="5">Ruang tamu dan Ruang Bersama</option>
                    <option value="6">Receptionist</option>
                    <option value="7">Dapur</option>
                    <option value="8">Laundry</option>
                    <option value="9">Meja dan Kursi</option>
                    <option value="10">Cadangan Material Gedung</option>
                    <option value="11">Transportasi</option>
                    <option value="12">Accessories</option>
                    <option value="13">Kunci Bangunan DLL</option>
                    <option value="14">Lainnya</option>
                </select>
            </div>

            <div class="col-sm mb-3 mb-sm-0">
                <label for="banyak_barang" class="label-form">Banyak Barang:</label>
                <input type="number" class="form-control" id="banyak_barang" name="banyak_barang">
            </div>
        </div>
        <button type="submit" class="btn bg-gold btn-xl text-uppercase" style="color: antiquewhite;">
            <strong>Check In</strong>
        </button>
    </div>
</form>

@endsection