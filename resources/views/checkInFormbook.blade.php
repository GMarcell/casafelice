@extends('layoutDashboard')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Check In Form</h1>
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

<form method="post" action="{{ url('checkInForm/update', $book->id) }}">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="name" class="label-form">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book -> name}}">
        </div>

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="gender" class="label-form">Jenis Kelamin:</label><br>
                <select id="gender" class="form-control" name="gender">
                    <option value="" disabled selected> Choose Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>

            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="tanda_pengenal" class="label-form">Tipe Tanda Pengenal:</label><br>
                <select id="tanda_pengenal" class="form-control" name="tanda_pengenal">
                    <option value="" disabled selected> Choose ID Type</option>
                    <option value="1">KTP</option>
                    <option value="2">SIM</option>
                    <option value="3">PASSPORT</option>
                </select>
            </div>

        </div>

        <div class="form-group">
            <label for="address" class="label-form">Alamat:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>

        <div class="form-group row">
            <div class="col-sm mb-3 mb-sm-0">
                <label for="room_number" class="label-form">Nomor Kamar:</label>
                <input type="number" class="form-control" id="room_number" name="room_number">
            </div>

            <div class="col-sm mb-3 mb-sm-0">
                <label for="source" class="label-form">Sumber:</label><br>
                <select id="source" class="form-control" name="source">
                    <option value="" disabled selected> Choose Source</option>
                    <option value="1">On The Spot</option>
                    <option value="2">Online Travel Agent</option>
                </select>
            </div>

            <div class="col-sm mb-3 mb-sm-0">
                <label for="room_type" class="label-form">Tipe Ruangan:</label><br>
                <select id="room_type" class="form-control" name="room_type" value="{{ $book -> room_type}}">
                    <option value="" disabled selected> Choose Room Type</option>
                    <option value="1">Standard Room</option>
                    <option value="2">Deluxe Room</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm mb-3 mb-sm-0">
                <label for="no_telephone" class="label-form">No Telephone:</label>
                <input type="text" class="form-control" id="no_telephone" name="no_telephone">
            </div>

            <div class="col-sm mb-3 mb-sm-0">
                <label for="email" class="label-form">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm mb-3 mb-sm-0">
                <label for="check_in_date" class="label-form">Tanggal Check In:</label>
                <input type="date" class="form-control" id="check_in_date" name="check_in_date" value="{{ $book -> check_in_date}}">
            </div>

            <div class="col-sm mb-3 mb-sm-0">
                <label for="check_out_date" class="label-form">Tanggal Check Out:</label>
                <input type="date" class="form-control" id="check_out_date" name="check_out_date" value="{{ $book -> check_out_date}}">
            </div>
        </div>
        <button type="submit" class="btn bg-gold btn-xl text-uppercase" style="color: antiquewhite;">
            <strong>Check In</strong>
        </button>
    </div>
</form>

@endsection