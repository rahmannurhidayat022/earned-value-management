<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyek;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function jangkaPendekView()
    {
        if(Auth::check()){
            return view('admin.jangka_pendek', [
                'proyek' => Proyek::all(),
            ]);
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }

}
