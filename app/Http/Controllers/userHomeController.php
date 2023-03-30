<?php
 
namespace App\Http\Controllers;
 
use App\Models\PaketWo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; /*library query builder*/
// use App\Models\User;
 
class userHomeController extends Controller
{
	public function index(){
		return view('user.home', [
			'pakets' => PaketWo::where('status', 'aktif')->paginate(5),
			'wo' => DB::table('users')->select("*")->limit(9)->get()
		]);
	}

	public function show($id){
		return view('user.pakets', [
			'pakets' => PaketWo::where('id', $id)->paginate(10)
		]);
	}

	public function list_paket()
	{
		return view('user.list_paket', [
			'pakets' => PaketWo::where('status', 'aktif')->paginate(20) 
		]);
	}

	public function list_wedding(){
		return view('user.list_wo');
	}


}