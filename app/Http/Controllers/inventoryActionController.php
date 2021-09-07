<?php

namespace App\Http\Controllers;

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

    public function showAddInventoryActionForm()
    {
        return view('add_action_form');
    }

    public function addaction(Request $request)
    {
        $rules = [
            'inventory_type'            => 'required',
            'inventory_action_type'     => 'required',
            'jumlah'                    => 'required'
        ];

        $messages = [
            'inventory_type'            => 'Tipe Inventory Harus Diisi',
            'inventory_action_type'     => 'Tipe Tindakan Harus Diisi',
            'jumlah'                    => 'Banyak Barang Harus Diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $action = new inventoryAction;
        $action->inventory_type = $request->inventory_type;
        $action->inventory_action_type = $request->inventory_action_type;
        $action->banyak_barang = $request->jumlah;
        $simpan = $action->save();

        $tipeinv = inventorys::findOrFail($request->inventory_type);
        if ($request->inventory_action_type == 1) {
            //tambahin di list inventory
            //update di list inventory
            $jumlah_barang = $tipeinv->jumlah;
            $total = $jumlah_barang + $request->jumlah;
            $tipeinv->update([
                'jumlah' => $total
            ]);
        } else {
            // kurangin jumlah di list inventory
            //update di list inventory
            $jumlah_barang = $tipeinv->jumlah;
            $total = $jumlah_barang - $request->jumlah;
            $tipeinv->update([
                'jumlah' => $total
            ]);
        }

        if ($simpan) {
            Session::flash('success', 'Tindakan Berhasil');
            return redirect()->route('inventoryActionList');
        } else {
            Session::flash('errors', ['' => 'Tindakan Gagal']);
            return redirect()->route('addInventoryAction');
        }
    }
}
