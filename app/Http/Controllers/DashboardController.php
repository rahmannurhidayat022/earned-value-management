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
                'proyeks' => Proyek::all(),
            ]);
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }

    public function addDataProyek(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required',
            'ptc' => 'required',
            'ptt' => 'required',
            'pv' => 'required',
            'ev' => 'required',
            'ac' => 'required',
        ]);

        $user = Auth::user();
        $data = $request->all();
        $check = Proyek::create([
            'user_id' => $user->id,
            'nama_proyek' => $data['nama_proyek'],
            'ptc' => $data['ptc'],
            'ptt' => $data['ptt'],
            'pv' => $data['pv'],
            'ac' => $data['ev'],
        ]);
    }

}
