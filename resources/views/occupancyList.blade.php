@extends('layoutDashboard')

@section('content')

<h1 class="h3 mb-4 text-gray-800">List Booking</h1>

<a href="checkInFormEmpty" class="btn bg-gold btn-xl text-uppercase mb-2" style="color: antiquewhite;" href> Check In </a>

@if ($messages = Session::get('success'))
<p>{{ $messages}}</p>
@endif

<table class="table table-striped table-sm">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Tanda Pengenal</td>
            <td>Gender</td>
            <td>Address</td>
            <td>Room Number</td>
            <td>Source</td>
            <td>Room Type</td>
            <td>No Telephone</td>
            <td>Email</td>
            <td>Check In Date</td>
            <td>Check Out Date</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($occupancys as $occupan)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$occupan->name}}</td>
            <td>{{$occupan->type_tanda_pengenal}}</td>
            <td>{{$occupan->gender_type}}</td>
            <td>{{$occupan->address}}</td>
            <td>{{$occupan->room_number}}</td>
            <td>{{$occupan->source_name}}</td>
            <td>{{$occupan->type}}</td>
            <td>{{$occupan->no_telephone}}</td>
            <td>{{$occupan->email}}</td>
            <td>{{$occupan->check_in_date}}</td>
            <td>{{$occupan->check_out_date}}</td>
            <td>
                <a class="badge badge-success" href="">Check In</a>
                <a class="badge badge-warning" href="">Edit</a>
                <form method="POST" action="">
                    @csrf
                    @method('delete')
                    <button class="badge badge-danger">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection