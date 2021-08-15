<?php

namespace App\Http\Controllers;

use App\Models\inventorys;
use Illuminate\Http\Request;

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
