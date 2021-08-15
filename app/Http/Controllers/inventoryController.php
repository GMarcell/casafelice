<?php

namespace App\Http\Controllers;

use App\Models\inventorys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class inventoryController extends Controller
{
    public function __construct()
    {
        $this->inventorys = new inventorys();
    }

    public function inventoryList()
    {
        $data = [
            'inventorys' => $this->inventorys->getAllInventory(),
        ];
        return view('inventoryList', $data);
    }

    public function tambahinventoryform($id)
    {
        $inventory = inventorys::findOrFail($id);
        return view('inventorytambah', compact('inventory'));
    }

    public function tambahinventory(Request $request)
    {
        $rules = [
            'banyak_barang'         => 'required'
        ];

        $messages = [
            'banyak_barang.required' => 'Banyak Barang Wajib Diisi'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
    }
}
