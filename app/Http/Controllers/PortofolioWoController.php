<?php

namespace App\Http\Controllers;

use App\Models\PortofolioWo;
use App\Models\PaketWo;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortofolioWoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $title = 'Home Portofolio';
      // $items = PortofolioWo::find(Auth::user()->id)->get();
      
      $items = PortofolioWo::where('id_user', Auth::user()->id)->get();
 
      return view('wo.portofolio.index', ['title'=>$title, 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $title = 'Create Portofolio';
      $pakets = PaketWo::where('id_user', Auth::user()->id)->get();
      return view('wo.portofolio.create', ['title'=>$title, 'pakets' => $pakets]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('foto');
        $validatedData = $request->validate([
            'id_user'=>'required',
            'id_paket_wo'=>'required',
            'nama_acara'=>'required',
            'tanggal_acara'=>'required',
            'lokasi'=>'required',
            'keterangan'=>'required|max:255',
            'foto' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if ($image){
          $image->storePubliclyAs('img', $image->getClientOriginalName(), 'public');

          $validatedData['foto'] = $image->getClientOriginalName();
        }
        

        $porto = PortofolioWo::create($validatedData);

        if ($porto){
           return redirect(route('wo.portofolio'))->with('success', 'Berhasil tambah data');
        }else{
          return redirect(route('wo.portofolio'))->with(['error' => 'Gagal']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortofolioWo  $portofolioWo
     * @return \Illuminate\Http\Response
     */
    public function show(PortofolioWo $portofolioWo, $id)
    {
      $title = 'Detail Portofolio';
      $item = $portofolioWo->where('id',$id)->get();

      return view('wo.portofolio.show', compact('title','item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortofolioWo  $portofolioWo
     * @return \Illuminate\Http\Response
     */
    public function edit(PortofolioWo $portofolioWo, $id)
    {
      $title = "Edit Portofolio";
        $item = $portofolioWo->find($id);
        
        $pakets = PaketWo::where(['id_user'=>Auth::user()->id,'status'=> 'aktif'])->get();
        return view('wo.portofolio.edit', compact('title','item','pakets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortofolioWo  $portofolioWo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortofolioWo $portofolioWo)
    {
      $image = $request->file('foto');
      $this->validate($request, [
        'id_user'=>'required',
        'id_paket_wo'=>'required',
        'nama_acara'=>'required',
        'tanggal_acara'=>'required',
        'lokasi'=>'required',
        'keterangan'=>'required|max:255',        
      ]);

      $porto = PortofolioWo::find($request->id);
      if($image == ""){
        $porto->update([
          'id_paket_wo'=>$request->id_paket_wo,
          'nama_acara'=>$request->nama_acara,
          'tanggal_acara'=>$request->tanggal_acara,
          'lokasi'=>$request->lokasi,
          'keterangan'=>$request->keterangan,
        ]);
      }else{
        if ($image){
          $validatedData['foto'] = $image->getClientOriginalName();
          $image->storePubliclyAs('img', $image->getClientOriginalName(), 'public');
        }

        $porto->update([
          'id_paket_wo'=>$request->id_paket_wo,
          'nama_acara'=>$request->nama_acara,
          'tanggal_acara'=>$request->tanggal_acara,
          'lokasi'=>$request->lokasi,
          'keterangan'=>$request->keterangan,
          'foto'=>$image->getClientOriginalName()
        ]);
      }
      
      if ($porto){
          return redirect(route('wo.portofolio'))->with('success', 'Berhasil ubah data');
      }else{
        return redirect(route('wo.portofolio'))->with(['error' => 'Gagal Ubah data']);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortofolioWo  $portofolioWo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortofolioWo $portofolioWo,$id)
    {
        $item = $portofolioWo->find($id);
        if ($item){
          $delete = $item->delete();
        }
        if ($delete){
          return redirect(route('wo.portofolio'))->with('success', 'Berhasil hapus data');
        }else{
          return redirect(route('wo.portofolio'))->with(['error' => 'Gagal Hapus data']);
        }

    }
}
