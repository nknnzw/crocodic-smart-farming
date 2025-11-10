<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SplashController extends Controller
{
    public function index()
    {
        if (session('splash_shown')) {
            return redirect()->route('beranda');
        }

        return view('component.splash');
    }

    public function markAsShown(Request $request)
    {
        session(['splash_shown' => true]);
        return response()->json(['success' => true]);
    }
}
