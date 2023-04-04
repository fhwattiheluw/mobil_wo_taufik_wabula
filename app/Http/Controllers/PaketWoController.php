<?php

namespace App\Http\Controllers;

use App\Models\PaketWo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

class PaketWoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PaketWo::where(['id_user'=>Auth::user()->id,'status'=> 'aktif'])->get();

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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah paket';
        return view('wo.packets.form', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('foto_paket');
        $validatedData = $request->validate([
            'id_user'=>'required',
            'nama_paket'=>'required|max:200',
            'jenis'=>'required',
            'harga'=>'required|max:10',
            'spesifikasi'=>'max:255',
            'status'=>'required',
            'foto_paket' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $image->storePubliclyAs('img', $image->getClientOriginalName(), 'public');

        $validatedData['foto_paket'] = $image->getClientOriginalName();

        $paketwo = PaketWo::create($validatedData);

        if($paketwo){
            return redirect('/wo/packets')->with('succes','Paket WO Inserted');
        }else{
            return redirect('/wo/packets')->with('error','Paket WO Inserted');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketWo  $paketWo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data';
        $item = PaketWo::find($id);
        return view('wo.packets.edit', ['item' => $item, 'title' => $title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketWo  $paketWo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketWo $paketWo)
    {
        $image = $request->file('foto_paket');
        $this->validate($request, [
            'nama_paket'=>'required|max:200',
            'jenis'=>'required',
            'harga'=>'required|max:10',
            'spesifikasi'=>'max:255',
            'status'=>'required',
        ]);


        $paketWo = PaketWo::findOrFail($request->id);
        if($request->foto_paket == ""){
            $paketWo->update([
                'nama_paket'=> $request->nama_paket,
                'jenis'=> $request->jenis,
                'harga'=> $request->harga,
                'spesifikasi'=> $request->spesifikasi,
                'status'=> $request->status,
            ]);
        }else{
            $this->validate($request, [
                'foto_paket'     => 'required|image|mimes:png,jpg,jpeg',
            ]);
            // $image_name = $image->hashName();            
            $image->storePubliclyAs('img', $image->getClientOriginalName(), 'public');
            // $image->store('/assets');

            $paketWo->update([
                'nama_paket'=> $request->nama_paket,
                'jenis'=> $request->jenis,
                'harga'=> $request->harga,
                'spesifikasi'=> $request->spesifikasi,
                'status'=> $request->status,
                'foto_paket' => $image->getClientOriginalName()
            ]);
        }

        if($paketWo){
            return redirect()->route('wo.paket')->with(['success' => 'Berhasil update']);
        }else{
            return redirect()->route('wo.paket')->with(['error' => 'gagal update data']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketWo  $paketWo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $paketWo = PaketWo::findOrFail($request->id);
        $paketWo->delete();

        if($paketWo){
            return redirect()->route('wo.paket')->with(['success' => 'Berhasil hapus data']);
        }else{
            return redirect()->route('wo.paket')->with(['error' => 'gagal hapus data']);
        }
    }
}
