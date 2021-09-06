<?php

namespace App\Http\Controllers;

use App\Models\inventoryAction;
use Illuminate\Http\Request;

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
}
