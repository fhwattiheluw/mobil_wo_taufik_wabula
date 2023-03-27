<?php

namespace App\Http\Controllers;

use App\Models\PaketWo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaketWoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(request('author')) {
        //     $author = User::firstWhere('username', request('author'));
        //     $title = ' by ' . $author->name;
        // }

        $pakets = PaketWo::where('status', 'aktif')->paginate(10);

        return view('pakets', compact('pakets'));
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketWo  $paketWo
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketWo $paketWo)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketWo  $paketWo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketWo $paketWo)
    {
        //
    }
}
