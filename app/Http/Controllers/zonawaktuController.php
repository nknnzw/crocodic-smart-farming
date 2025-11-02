<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZonawaktuController extends Controller
{
    public function zona()
    {
        return view('zonawaktu');
    }
}