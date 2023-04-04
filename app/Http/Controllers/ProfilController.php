<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wo;

class ProfilController extends Controller
{
    public function index()
    {   
        $title = 'Profil WO';

        $item = Wo::where('id',Auth::user()->id)->first();

        return view('wo.profil.index', compact('title', 'item'));
    }

    public function register()
    {
        $title = 'Register Wedding Organizer';

        return view('wo.profil.register', ['title'=>$title]);
    }

    public function edit()
    {
        $title = 'Edit Profil';

        $item = Wo::where('id',Auth::user()->id)->first();

        return view('wo.profil.edit', compact('title', 'item'));

    }
}
