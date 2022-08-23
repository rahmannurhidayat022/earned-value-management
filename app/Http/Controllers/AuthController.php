<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboardView()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
