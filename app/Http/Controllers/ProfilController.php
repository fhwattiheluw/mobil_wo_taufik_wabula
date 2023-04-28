<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Wo;

class ProfilController extends Controller
{
    public function index()
    {
        $title = 'Profil WO';

        $item = User::where('id', Auth::user()->id)->first();

        return view('wo.profil.index', compact('title', 'item'));
    }

    public function register()
    {
        $title = 'Register Wedding Organizer';

        return view('wo.profil.register', ['title' => $title]);
    }

    public function edit()
    {
        $title = 'Edit Profil';

        $item = User::where('id', Auth::user()->id)->first();

        return view('wo.profil.edit', compact('title', 'item'));
    }

    public function update(Request $request)
    {
        $image = $request->file('foto');
        $title = "Profil";
        $profil = User::where('id', Auth::user()->id)->first();

        $this->validate($request, [
            'nama' => 'required|max:50',
            'email' => 'required|email',
            'nomor_hp' => 'required|max:35',
            'alamat' => 'required|max:250',
        ]);

        if ($image) {
            $this->validate($request, [
                'foto' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg|dimensions:max_width=100,max_height=200',
            ]);

            $image->storePubliclyAs('img', $image->getClientOriginalName(), 'public');

            $profil->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'nomor_hp' => $request->nomor_hp,
                'alamat' => $request->alamat,
                'foto' => $image->getClientOriginalName(),
            ]);
        } else {
            $profil->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'nomor_hp' => $request->nomor_hp,
                'alamat' => $request->alamat,
            ]);
        }

        return view('wo.profil.index', ['title' => $title, 'item' => $profil])->with(['succes' => 'Sukses update profil']);
    }

    public function pass_edit()
    {
        $title = "Edit Password";

        return view('wo.profil.edit_pass', ['title' => $title]);
    }
    public function pass_update(Request $request)
    {
        $title = "Profil";

        $this->validate($request, [
            'pass_lama' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->pass_lama, $user->password)) {
            return back()->withErrors(['pass_lama' => 'Password lama salah.']);
        }

        if ($request->password1 != $request->password2) {
            return back()->withErrors(['pass_lama' => 'Password 1 dan Password 2 tidak sama.']);
        }

        $user = User::find($user->id);
        $user->password = Hash::make($request->password);
        $user->save();

        return view('wo.profil.index', ['title' => $title, 'item' => $user]);
    }
}
