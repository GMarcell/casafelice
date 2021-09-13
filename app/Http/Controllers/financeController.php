<?php

namespace App\Http\Controllers;

use App\Models\finance;
use Illuminate\Http\Request;

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
}
