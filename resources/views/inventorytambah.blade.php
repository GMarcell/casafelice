@extends('layoutDashboard')

@section('content')

<h1 class="h3 mb-4 text-gray-800"> Tambah Inventory</h1>
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

<form method="POST" action="{{ url('tambahinventory')}}">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="banyak_barang" class="label-form">Banyak Barang:</label>
            <input type="number" class="form-control" id="banyak_barang" name="banyak_barang">
        </div>
        <br>
        <button type="submit" class="btn bg-gold btn-xl text-uppercase" style="color: antiquewhite;">
            <strong>Submit</strong>
        </button>
    </div>
</form>
@endsection