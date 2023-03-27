<?php
 
namespace App\Http\Controllers;
 
use App\Models\PaketWo;
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class userHomeController extends Controller
{
	public function index(){
		return view('user.home', [
			'pakets' => PaketWo::where('status', 'aktif')->paginate(10) 
		]);
	}

	public function show($id){
		return view('user.pakets', [
			'pakets' => PaketWo::where('id', $id)->paginate(10)
		]);
	}
}