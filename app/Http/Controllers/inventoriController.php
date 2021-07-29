<?php

namespace App\Http\Controllers;

use App\Models\inventori;
use Illuminate\Http\Request;

class inventoriController extends Controller
{
    public function __construct()
    {
        $this->inventori = new inventori();
    }

    public function inventorilist()
    {
        $data = [
            'inventori' => $this->inventori->getAllInventori(),
        ];
        return view('inventori/inventoriList', $data);
    }

    public function showinventoriForm()
    {
        return view('inventori/inventoriForm');
    }
}
