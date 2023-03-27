<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WoController extends Controller
{
    public function index()
    {
        if(request('wo')){
            $wo = User::where('id', 'wo');
        }
        return view('wo', $wo);
        // $wo = User::where('id', 'aktif')->paginate(10);

        // return view('pakets', compact('pakets'));
    }

// menampilkan view tentang WO pada aplikasi user
    public function about_wo($id_wo){
        return view('user/wo_about',['id' => $id_wo]);
    }

    public function porto_wo($id_wo){
        return view('user/wo_porto',['id' => $id_wo]);
    }

    public function paket_wo($id_wo){
        return view('user/wo_paket',['id' => $id_wo]);
    }

}
