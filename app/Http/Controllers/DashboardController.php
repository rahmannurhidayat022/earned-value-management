<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proyek;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('admin.counts', [
                'proyeks' => Proyek::paginate(5),
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
            'ac' => $data['ac'],
            'ev' => $data['ev'],
        ]);
        return redirect('counts')->withSuccess('Successfully!');
    }

    public function addCountsView()
    {
        if(Auth::check()) {
            return view('admin.add_counts');
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }
}
