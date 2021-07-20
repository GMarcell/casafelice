@extends('layoutDashboard')

@section('content')

<h1 class="h4 text-gray-800">List Traffic</h1>

<div style="overflow: auto;">
    <small>
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
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @foreach($traffics as $traffic)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$traffic->name}}</td>
                    <td>{{$traffic->type_tanda_pengenal}}</td>
                    <td>{{$traffic->gender_type}}</td>
                    <td>{{$traffic->address}}</td>
                    <td>{{$traffic->room_number}}</td>
                    <td>{{$traffic->source_name}}</td>
                    <td>{{$traffic->type}}</td>
                    <td>{{$traffic->no_telephone}}</td>
                    <td>{{$traffic->email}}</td>
                    <td>{{$traffic->check_in_date}}</td>
                    <td>{{$traffic->check_out_date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </small>
</div>

@endsection