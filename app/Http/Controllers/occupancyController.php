<?php

namespace App\Http\Controllers;

use App\Models\finance;
use App\Models\occupancys;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class occupancyController extends Controller
{
    public function __construct()
    {
        $this->occupancys = new occupancys();
    }

    public function occupancyList()
    {
        $data = [
            'occupancys' => $this->occupancys->getAllOccupancy(),
        ];
        return view('occupancyList', $data);
    }

    public function showCheckInForm()
    {
        return view('CheckInFormEmpty');
    }

    public function checkIn(Request $request)
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
        $simpan = $occupancy->save();

        if ($simpan) {
            Session::flash('success', 'Check In Berhasil');
            return redirect()->route('occupancyList');
        } else {
            Session::flash('errors', ['' => 'Check In Gagal']);
            return redirect()->route('occupancyList');
        }
    }

    public function delete($id)
    {
        $data = occupancys::findOrFail($id);
        $data->delete();
        return redirect('occupancyList')->with('success', 'Data is successfully deleted');
    }
}
