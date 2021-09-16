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
        $data = occupancys::findOrFail($id);

        $finance = new finance;
        $finance->keterangan = 'Pemasukan Guest House';
        $finance->tipe = 1;
        $checkin = strtotime($data->check_in_date);
        $checkout = strtotime($data->check_out_date);
        $diff = abs($checkout - $checkin);
        $days = ceil($diff / (60 * 60 * 24));
        if ($data->room_type == 1) {
            $jumlah = $days * 250000;
        } else {
            $jumlah = $days * 350000;
        }
        $finance->pemasukan = $jumlah;
        $finance->pengeluaran = 0;
        $simpan = $finance->save();

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
