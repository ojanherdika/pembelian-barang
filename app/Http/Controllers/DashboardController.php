<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $fallback = session('fallback', '/');
        return view('dashboard');
    }
}
