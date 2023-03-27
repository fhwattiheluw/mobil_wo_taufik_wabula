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
}
