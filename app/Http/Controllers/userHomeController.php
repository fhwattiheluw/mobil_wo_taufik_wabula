<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
// use App\Models\User;
 
class userHomeController extends Controller
{
	public function index(){
		return view('user.home');
	}
}