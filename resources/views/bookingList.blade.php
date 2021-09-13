@extends('layoutDashboard')

@section('content')

<h1 class="h4 text-gray-800">List Booking</h1>

@if ($messages = Session::get('success'))
<p>{{ $messages}}</p>
@endif

<div style="overflow: auto;">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>No</td>
                <td>Booking Name</td>
                <td>Check In Date</td>
                <td>Check Out Date</td>
                <td>Room Type</td>
                <td>Action</td>
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
                <td>
                    <a class="badge badge-success" href="{{ url('checkInForm', $booking->id) }}">Check In</a>
                    <a class="badge badge-warning" href="">Edit</a>
                    <form method="POST" action="{{ url('booking/delete', $booking->id )}}">
                        @csrf
                        @method('delete')
                        <button style="border: none;" class="badge badge-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection