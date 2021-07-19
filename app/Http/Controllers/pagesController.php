<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function bookingList()
    {
        return view('bookingList');
    }
}
