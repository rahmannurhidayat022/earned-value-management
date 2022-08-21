<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function jangkaPendekView()
    {
        return view('admin.jangka_pendek');
    }
}
