<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data['id_wo'] = $id_wo;
        $data['about'] = DB::table('users')->select('*')->where('id',$id_wo)->get();
        return view('user/wo_about',$data);
    }

    public function porto_wo($id_wo){
        $data['id_wo'] = $id_wo;
        $data['about'] = DB::table('users')->select('*')->where('id',$id_wo)->get();
        return view('user/wo_porto',$data);
    }

    public function paket_wo($id_wo){
        $data['id_wo'] = $id_wo;
        $data['about'] = DB::table('users')->select('*')->where('id',$id_wo)->get();
        return view('user/wo_paket',$data);
    }

    public function view_paket($id_wo,$paket = '0') /*menampilkan paket default adalah gold '1'*/
    {
        $data['id_wo'] = $id_wo;
        $data['about'] = DB::table('users')->select('*')->where('id',$id_wo)->get();
        $data['paket'] = $paket;

        return view('user/wo_list_paket',$data);
    }

}
