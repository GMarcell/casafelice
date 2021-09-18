<?php

namespace App\Http\Controllers;

use App\Models\finance;
use App\Models\inventoryAction;
use App\Models\inventorys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class inventoryActionController extends Controller
{
    public function __construct()
    {
        $this->invAction = new inventoryAction();
    }

    public function inventoryActionList()
    {
        $data = [
            'invAction' => $this->invAction->getAllInventoryAction()
        ];
        return view('inventory_action', $data);
    }

    public function showbarangKeluarForm()
    {
        return view('barang_keluar_form');
    }

    public function showbarangMasukForm()
    {
        return view('barang_masuk_form');
    }

    public function barang_keluar(Request $request)
    {
        $rules = [
            'inventory_type'            => 'required',
            'jumlah'                    => 'required'
        ];

        $messages = [
            'inventory_type'            => 'Tipe Inventory Harus Diisi',
            'jumlah'                    => 'Banyak Barang Harus Diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $action = new inventoryAction;
        $action->inventory_type = $request->inventory_type;
        $action->inventory_action_type = 2;
        $action->banyak_barang = $request->jumlah;
        $simpan = $action->save();

        $tipeinv = inventorys::findOrFail($request->inventory_type);
        // kurangin jumlah di list inventory
        //update di list inventory
        $jumlah_barang = $tipeinv->jumlah;
        $total = $jumlah_barang - $request->jumlah;
        $tipeinv->update([
            'jumlah' => $total
        ]);

        if ($simpan) {
            Session::flash('success', 'Tindakan Berhasil');
            return redirect()->route('inventoryActionList');
        } else {
            Session::flash('errors', ['' => 'Tindakan Gagal']);
            return redirect()->route('addInventoryAction');
        }
    }

    public function barang_masuk(Request $request)
    {
        $rules = [
            'inventory_type'            => 'required',
            'harga'                     => 'required',
            'jumlah'                    => 'required'
        ];

        $messages = [
            'inventory_type'            => 'Tipe Inventory Harus Diisi',
            'harga'                     => 'Harga Barang Harus Diisi',
            'jumlah'                    => 'Banyak Barang Harus Diisi'
        ];

        $action = new inventoryAction;
        $action->inventory_type = $request->inventory_type;
        $action->inventory_action_type = 1;
        $action->banyak_barang = $request->jumlah;
        $simpan = $action->save();

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $tipeinv = inventorys::findOrFail($request->inventory_type);
        $jumlah_barang = $tipeinv->jumlah;
        $total = $jumlah_barang + $request->jumlah;
        $tipeinv->update([
            'jumlah' => $total
        ]);

        $finance = new finance;
        $finance->keterangan = 'Pengeluaran Inventory';
        $finance->tipe = 2;
        $finance->pemasukan = 0;
        $harga = $request->harga;
        $total = $harga * $jumlah_barang;
        $finance->pengeluaran = $total;
        $nyimpen = $finance->save();

        if ($simpan && $nyimpen) {
            Session::flash('success', 'Berhasil');
            return redirect()->route('bookkeeping');
        } else {
            Session::flash('errors', ['' => 'Gagal']);
            return redirect()->route('bookkeeping');
        }
    }
}
