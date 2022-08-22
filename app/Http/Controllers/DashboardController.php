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
            'jangka_proyek' => 'required',
        ]);

        $cv = $request->ev - $request->ac;
        $sv = $request->ev - $request->pv;
        $spi = $request->ev / $request->pv;
        $cpi = $request->ev / $request->ac;
        $etc = ($request->ptc - $request->ev) / $cpi;
        $ecc = $request->ptc/$cpi;
        $ect = $request->ptt / $spi;

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
            'jangka_proyek' => $data['jangka_proyek'],
            'cv' => $cv,
            'sv' => $sv,
            'spi' => $spi,
            'cpi' => $cpi,
            'etc' => $etc,
            'ecc' => $ecc,
            'ect' => $ect,
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

    public function updateCountsView(Request $request, $proyek_id)
    {
        if(Auth::check()) {
            $proyek = Proyek::find($proyek_id);

            return view('admin.update_count', [
                'proyek' => $proyek,
            ]);
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }

    public function updateCounts(Request $request, $proyek_id)
    {
        if(AUth::check()) {
            $request->validate([
                'nama_proyek' => 'required',
                'ptc' => 'required',
                'ptt' => 'required',
                'pv' => 'required',
                'ev' => 'required',
                'ac' => 'required',
                'jangka_proyek' => 'required',
            ]);
            $proyek = Proyek::find($proyek_id);
            $proyek->nama_proyek = $request->input('nama_proyek');
            $proyek->ptc = $request->input('ptc');
            $proyek->ptt = $request->input('ptt');
            $proyek->pv = $request->input('pv');
            $proyek->ev = $request->input('ev');
            $proyek->ac = $request->input('ac');
            $proyek->jangka_proyek = $request->input('jangka_proyek');
            $proyek->update();
    
            return redirect("counts")->withSuccess('Successfully');
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }

    public function removeProyek($proyek_id)
    {
        if(Auth::check()) {
            Proyek::find($proyek_id)->delete();
            
            return redirect("counts")->withSuccess('Successfully');
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }
}
