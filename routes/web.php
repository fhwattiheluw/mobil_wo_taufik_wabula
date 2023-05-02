<?php

// DEKLARASI CONTROLLER
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketWoController;
use App\Http\Controllers\userHomeController;
use App\Http\Controllers\WoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioWoController;
use App\Http\Controllers\ProfilController;

// ROUTE AWAL

Route::get('/', function () {return redirect(route('user.home'));});

// Halaman User
Route::get('user/home', [userHomeController::class, 'index'])->name('user.home');
Route::get('user/home/{id:id_user}', [userHomeController::class, 'show'])->name('user.show');
Route::get('user/weddings', [userHomeController::class, 'list_wedding'])->name('user.weddings');
Route::get('user/pakets', [userHomeController::class, 'list_paket'])->name('user.pakets');
Route::get('user/pakets/{jenis}', [userHomeController::class, 'list_paket_jenis'])->name('user.pakets.jenis');
Route::get('user/wo/about/{id_wo}', [WoController::class, 'about_wo'])->name('user.wo.about');
Route::get('user/wo/porto/{id_wo}', [WoController::class, 'porto_wo'])->name('user.wo.porto');
Route::get('user/wo/paket/{id_wo}', [WoController::class, 'paket_wo'])->name('user.wo.paket');
Route::get('user/wo/paket/{id_wo}/{paket}', [WoController::class, 'paket_wo'])->name('user.wo.paket.list');

// Halaman admin WO
Route::get('/wo/login', 'App\Http\Controllers\UserController@showLoginForm')->name('login');
Route::post('/wo/login', [UserController::class, 'login']);
Route::get('/wo/logout', [UserController::class, 'logout'])->name('wo.logout');
Route::get('/wo/signup', [UserController::class, 'form_signup'])->name('wo.signup');
Route::post('/wo/signup', [UserController::class, 'create'])->name('wo.create');

// khusus untuk login
Route::middleware(['auth'])->group(function () {
        Route::get('/wo/home', [WoController::class, 'index'])->name('wo.home');
        Route::get('/wo/packets', [PaketWoController::class, 'index'])->name('wo.paket');
        Route::get('/wo/packets/create', [PaketWoController::class, 'create'])->name('wo.paket.create');
        Route::post('/wo/packets/create', [PaketWoController::class, 'store']);
        Route::get('/wo/packets/{id}/edit', [PaketWoController::class, 'edit'])->name('wo.edit');
        Route::put('/wo/packets/{id}/edit', [PaketWoController::class, 'update']);
        Route::delete('/wo/packets/{id}/delete', [PaketWoController::class, 'destroy'])->name('wo.delete');
});


// Admin WO Portofolio
Route::middleware(['auth'])->group(function (){
        Route::get('/wo/portofolio', [PortofolioWoController::class, 'index'])->name('wo.portofolio');
        Route::get('/wo/portofolio/create', [PortofolioWoController::class, 'create'])->name('wo.portofolio.create');
        Route::post('/wo/portofolio/create', [PortofolioWoController::class, 'store']);
        Route::get('/wo/portofolio/{id}', [PortofolioWoController::class, 'show'])->name('wo.portofolio.show');
        Route::get('/wo/portofolio/{id}/edit', [PortofolioWoController::class, 'edit'])->name('wo.portofolio.edit');
        Route::put('/wo/portofolio/{id}/edit', [PortofolioWoController::class, 'update']);
        Route::delete('/wo/portofolio/{id}/delete', [PortofolioWoController::class, 'destroy'])->name('wo.portofolio.delete');
});

Route::middleware(['auth'])->group(function (){
        Route::get('/wo/profil', [ProfilController::class, 'index'])->name('wo.profil');
        Route::get('/wo/profil/edit', [ProfilController::class, 'edit'])->name('wo.profil.edit');
        Route::post('/wo/profil/edit', [ProfilController::class, 'update'])->name('wo.profil.update');
        Route::get('/wo/profil/pass/edit', [ProfilController::class, 'pass_edit'])->name('wo.profil.pass.edit');
        Route::post('/wo/profil/pass/edit', [ProfilController::class, 'pass_update'])->name('wo.profil.pass.update');
});

//untuk register WO
Route::get('/wo/register', [ProfilController::class, 'register'])->name('wo.profil.register');
Route::post('/wo/register', [ProfilController::class, 'create'])->name('wo.profil.create');

//menampilkan data-data untuk pelanggan
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
