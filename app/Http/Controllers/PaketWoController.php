<?php

namespace App\Http\Controllers;

use App\Models\PaketWo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaketWoController extends Controller
{
    public function index()
    {
        // if(request('author')) {
        //     $author = User::firstWhere('username', request('author'));
        //     $title = ' by ' . $author->name;
        // }

        $items = PaketWo::where('status', 'aktif')->get();

        return view('wo.packets.index', compact('items'));
    }

    // public function show(PaketWo $paketwo)
    // {
    //     $paket = PaketWo::find($id);

    //     return view('paket.show', compact('paket'));
    // }
    public function show(PaketWo $paket)
    {
        return view('paket', [
            "title" => "Detail Paket WO",
            "active" => 'detail',
            "paket" => $paket
        ]);
    }

    public function form()
    {
        $title = 'Tambah paket';
        return view('wo.packets.form', ['title' => $title]);
    }

    public function add(Request $request)
    {
        
        $validatedData = $request->validate([
            'nama_paket'=>'required|max:100',
            'jenis'=>'required',
            'harga'=>'required|max:200',
            'spesifikasi'=>'required|max:255',
            'status'=>'required',
            'foto_paket' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        // upload gambar
        $name_img = time() . '_' . $request->file('foto_paket')->getClientOriginalName();
        $path = $request->file('foto_paket')->storeAs('public/img',$name_img);
        // end upload gambar
        
        $input = PaketWo::create([ /*upload data ke model*/
            'id_user'=> Auth::user()->id,
            'nama_paket'=>$request->input('nama_paket'),
            'jenis'=>$request->input('jenis'),
            'harga'=>$request->input('harga'),
            'spesifikasi'=>$request->input('spesifikasi'),
            'status'=>$request->input('status'),
            'foto_paket1' => $path,
        ]);

        // redirect ke halaman dengan session success
        return redirect()->route('wo.paket.form_tambah')->with('success','Paket berhasil di tambahkan');
        
    }

    public function edit(PaketWo $paketWo)
    {
        //
    } 

    public function update(Request $request, PaketWo $paketWo)
    {
        //
    }

    public function destroy(PaketWo $paketWo)
    {
        //
    }
}
