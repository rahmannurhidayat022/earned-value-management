<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Proyek;
use Session;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return redirect('dashboard');
        }

        return view('auth.signin');
    }

    public function createSignin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Logged-in');
        }
        return redirect("login")->withSuccess('Credentials are wrong.');
    }

    public function signup()
    {
        if(Auth::check()) {
            return redirect('dashboard');
        }

        return view('auth.signup');
    }

    public function customSignup(Request $request)
    {  
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'nama' => 'required',
            'jabatan' => 'required',
            'role' => 'required',
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("dashboard")->withSuccess('Successfully logged-in!');
    }

    public function createUser(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'jabatan' => $data['jabatan'],
        'nama' => $data['nama'],
        'role' => $data['role'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboardView()
    {
        if(Auth::check()){
            $total_proyek = Proyek::count();
            $proyek_pendek = Proyek::where('jangka_proyek', 'pendek')->count();
            $proyek_panjang = Proyek::where('jangka_proyek', 'panjang')->count();

            return view('auth.dashboard', [
                'total_proyek' => $total_proyek,
                'proyek_pendek' => $proyek_pendek,
                'proyek_panjang' => $proyek_panjang,
            ]);
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
