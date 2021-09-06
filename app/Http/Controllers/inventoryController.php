<?php

namespace App\Http\Controllers;

use App\Models\inventorys;

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
}
