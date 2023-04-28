<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Menampilkan halaman login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('wo.login');
    }

    /**
     * Menangani proses login pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('wo.home');
        }

        return back()->withErrors(['login' => 'Email atau password salah']);
    }

    /**
     * Menangani proses logout pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function form_signup(Request $request)
    {
      return view('wo.signup');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        

        $wo = new User();
        $wo->nama = $request->nama;
        $wo->email = $request->email;
        $wo->password = Hash::make($request->password);
        $wo->save();

        return view('wo.login')->with('succes','Registrasi berhasil');
    }
}
