<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PortofolioWo;
use App\Models\PaketWo;

class WoController extends Controller
{
    public function index()
    {
        $title = "Wedding Organizer";
        return view('wo.index', compact('title'));
    }

// menampilkan view tentang WO pada aplikasi user
    public function about_wo($id_wo){
        $data['id_wo'] = $id_wo;
        $data['about'] = DB::table('users')->select('*')->where('id',$id_wo)->get();
        return view('user/wo_about',$data);
    }

    public function porto_wo($id_wo)
    {
        $title = "Portofolio";
        $about= DB::table('users')->select('*')->where('id',$id_wo)->get();
        $porto = PortofolioWo::where('id_user',$id_wo)->get();

        return view('user/wo_porto',['title'=>$title, 'porto'=>$porto,'id_wo'=>$id_wo,'about'=>$about]);
    }

    public function paket_wo($id_wo,$paket = 'null'){
        $data['id_wo'] = $id_wo;
        $data['about'] = DB::table('users')->select('*')->where('id',$id_wo)->get();
        $data['pakets'] = PaketWo::where('id_user',$id_wo)->where('jenis',$paket)->get();
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
