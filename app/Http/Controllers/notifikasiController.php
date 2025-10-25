<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function notifikasi()
    {
        return view('notifikasi');
    }
}