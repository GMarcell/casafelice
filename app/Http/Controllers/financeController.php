<?php

namespace App\Http\Controllers;

use App\Models\finance;
use App\Models\occupancys;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class financeController extends Controller
{
    public function __construct()
    {
        $this->finance = new finance();
    }

    public function bookkeeping()
    {
        $data = [
            'bookkeeping' => $this->finance->getAllFinance()
        ];
        return view('bookkeeping', $data);
    }

    public function checkout(Request $request, $id)
    {
        $finance = new finance;
        $finance->keterangan = 'Pemasukan Guest House';
        $finance->tipe = 1;
        $checkin = new DateTime($request->check_in_date);
        $checkout = new DateTime($request->check_out_date);
        $diff = date_diff($checkin, $checkout);
        $days = $diff->format('%a');
        if ($request->room_type == 1) {
            $jumlah = $days * 250000;
        } else {
            $jumlah = $days * 350000;
        }
        $finance->pemasukan = $days;
        $finance->pengeluaran = 0;
        $simpan = $finance->save();

        $data = occupancys::findOrFail($id);
        $data->delete();

        if ($simpan) {
            Session::flash('success', 'Berhasil');
            return redirect()->route('bookkeeping');
        } else {
            Session::flash('errors', ['' => 'Gagal']);
            return redirect()->route('bookkeeping');
        }
    }
}
