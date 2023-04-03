<?php

namespace App\Http\Controllers;

use App\Models\PortofolioWo;
use App\Models\PaketWo;
use App\Http\Controllers\Controller;
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
      $items = PaketWo::where('id_user', Auth::user()->id)->get();
        // $items = PaketWo::all();

        // dd($items->all());

      return view('wo.portofolio.index', ['title'=>$title, 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $title = 'Create Portofolio';
        return view('wo.portofolio.create', ['title'=>$title, 'id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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

      // dd($item->all());

      return view('wo.portofolio.show', compact('title','item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortofolioWo  $portofolioWo
     * @return \Illuminate\Http\Response
     */
    public function edit(PortofolioWo $portofolioWo)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortofolioWo  $portofolioWo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortofolioWo $portofolioWo)
    {
        //
    }
}
