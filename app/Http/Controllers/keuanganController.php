<?php

namespace App\Http\Controllers;

use App\Models\keuangan;
use Illuminate\Http\Request;

class keuanganController extends Controller
{
    public function __construct()
    {
        $this->keuangan = new keuangan();
    }

    public function laporanKeuangan()
    {
    }
}
