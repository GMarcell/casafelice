<?php

namespace App\Http\Controllers;

use App\Models\occupancys;
use App\Models\roomBookings;
use App\Models\traffics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class bookingController extends Controller
{

    public function __construct()
    {
        $this->roomBookings = new roomBookings();
    }

    public function bookingList()
    {
        $data = [
            'bookings' => $this->roomBookings->getAllBooking(),
        ];
        return view('bookingList', $data);
    }

    public function showBookingForm()
    {
        return view('booking/book_room');
    }

    public function edit($id)
    {
        $book = roomBookings::findOrFail($id);
        return view('checkin/checkInFormbook', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name'              => 'required|max:255',
            'tanda_pengenal'    => 'required',
            'gender'            => 'required',
            'address'           => 'required',
            'room_number'       => 'required',
            'source'            => 'required',
            'room_type'         => 'required',
            'no_telephone'      => 'required',
            'email'             => 'required',
            'check_in_date'     => 'required',
            'check_out_date'    => 'required',
        ];

        $messages = [
            'name.required'              => 'Nama Wajib Diisi',
            'tanda_pengenal.required'    => 'Tanda Pengenal Wajib Diisi',
            'gender.required'            => 'Jenis Kelamin Wajib Diisi',
            'address.required'           => 'Alamat Wajib Diisi',
            'room_number.required'       => 'Nomor Kamar Wajib Diisi',
            'source.required'            => 'Sumber Wajib Diisi',
            'room_type.required'         => 'Tipe Ruangan Wajib Diisi',
            'no_telephone.required'      => 'Nomor Telephone Wajib Diisi',
            'email.required'             => 'Alamat Email Wajib Diisi',
            'check_in_date.required'     => 'Tanggal Check In Wajib Diisi',
            'check_out_date.required'    => 'Tanggal Check In Wajib Diisi',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $occupancy = new occupancys;
        $occupancy->name = ucwords(strtolower($request->name));
        $occupancy->tanda_pengenal = $request->tanda_pengenal;
        $occupancy->gender = $request->gender;
        $occupancy->address = $request->address;
        $occupancy->room_number = $request->room_number;
        $occupancy->source = $request->source;
        $occupancy->room_type = $request->room_type;
        $occupancy->no_telephone = $request->no_telephone;
        $occupancy->email = $request->email;
        $occupancy->check_in_date = $request->check_in_date;
        $occupancy->check_out_date = $request->check_out_date;
        $simpanOccupancy = $occupancy->save();

        $traffics = new traffics;
        $traffics->name = ucwords(strtolower($request->name));
        $traffics->tanda_pengenal = $request->tanda_pengenal;
        $traffics->gender = $request->gender;
        $traffics->address = $request->address;
        $traffics->room_number = $request->room_number;
        $traffics->source = $request->source;
        $traffics->room_type = $request->room_type;
        $traffics->no_telephone = $request->no_telephone;
        $traffics->email = $request->email;
        $traffics->check_in_date = $request->check_in_date;
        $traffics->check_out_date = $request->check_out_date;
        $simpanTraffics = $traffics->save();

        $data = roomBookings::findOrFail($id);
        $data->delete();

        if ($simpanOccupancy && $simpanTraffics) {
            Session::flash('success', 'Check In Berhasil');
            return redirect()->route('booking/bookingList');
        } else {
            Session::flash('errors', ['' => 'Check In Gagal']);
            return redirect()->route('booking/bookingbookingList');
        }
    }

    public function destroy($id)
    {
        $data = roomBookings::findOrFail($id);
        $data->delete();
        return redirect('booking/bookingList')->with('success', 'Data is successfully deleted');
    }

    public function bookingroom(Request $request)
    {
        $rules = [
            'name'              => 'required',
            'check_in_date'     => 'required|date|after:yesterday',
            'check_out_date'    => 'required|date|after:check_in_date',
            'room_type'         => 'required'
        ];

        $messages = [
            'name.required'               => 'Nama Wajib Diisi',
            'check_in_date.required'      => 'Tanggal Check In Wajib Diisi',
            'check_in_date.date'          => 'Tanggal Check In Wajib berupa tanggal',
            'check_in_date.after'         => 'Tanggal check in sudah lewat',
            'check_out_date.required'     => 'Check Out Wajib Diisi',
            'check_out_date.date'         => 'Tanggal Check out Wajib berupa tanggal',
            'check_out_date.after'        => 'Tanggal check out sudah lewat',
            'room_type.required'          => 'Tipe Kamar Wajib Diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $roomBookings = new roomBookings;
        $roomBookings->name = ucwords(strtolower($request->name));
        $roomBookings->check_in_date = $request->check_in_date;
        $roomBookings->check_out_date = $request->check_out_date;
        $roomBookings->room_type = $request->room_type;
        $simpan = $roomBookings->save();

        if ($simpan) {
            Session::flash('success', 'Booking berhasil!');
            return redirect()->route('home');
        } else {
            Session::flash('errors', ['' => 'Booking gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('home');
        }
    }
}
