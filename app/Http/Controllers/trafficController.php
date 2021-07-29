<?php

namespace App\Http\Controllers;

use App\Models\traffics;
use Illuminate\Http\Request;

class trafficController extends Controller
{
    public function __construct()
    {
        $this->traffics = new traffics();
    }

    public function trafficList()
    {
        $data = [
            'traffics' => $this->traffics->getAllTraffic(),
        ];
        return view('checkin/trafficList', $data);
    }
}
