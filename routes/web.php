<?php

// DEKLARASI CONTROLLER
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketWoController;
use App\Http\Controllers\userHomeController;
use App\Http\Controllers\WoController;

// ROUTE AWAL 

Route::get('/', function () {
    return view('user/login');
});

// Halaman User
Route::get('user/home', [userHomeController::class, 'index'])->name('user.home');
Route::get('user/home/{id:id_user}', [userHomeController::class, 'show'])->name('user.show');
Route::get('user/wo/about/{id_wo}', [WoController::class, 'about_wo'])->name('user.wo.about');
Route::get('user/wo/porto/{id_wo}', [WoController::class, 'porto_wo'])->name('user.wo.porto');
Route::get('user/wo/paket/{id_wo}', [WoController::class, 'paket_wo'])->name('user.wo.paket');


// Halaman admin WO
Route::get('/wo', [WoController::class, 'index']);


Route::get('/login', 'App\Http\Controllers\UserController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login.post');
Route::post('/logout', 'UserLoginController@logout')->name('logout');

Route::get('/paket-wo', [PaketWoController::class, 'index'])->name('paket-wo.index');
Route::get('/paket-wo/{paket:id}', [PaketWoController::class, 'show'])->name('paketwo.show');

// Route paket WO
// Route::prefix('paket-wo')->group(function () {
//     Route::get('/', [PaketWoController::class, 'index'])->name('paket-wo.index');
//     Route::get('/create', [PaketWoController::class, 'create'])->name('paket-wo.create');
//     Route::post('/', [PaketWoController::class, 'store'])->name('paket-wo.store');
//     Route::get('/{id}', [PaketWoController::class, 'show'])->name('paket-wo.show');
//     Route::get('/{id}/edit', [PaketWoController::class, 'edit'])->name('paket-wo.edit');
//     Route::put('/{id}', [PaketWoController::class, 'update'])->name('paket-wo.update');
//     Route::delete('/{id}', [PaketWoController::class, 'destroy'])->name('paket-wo.destroy');
// });

