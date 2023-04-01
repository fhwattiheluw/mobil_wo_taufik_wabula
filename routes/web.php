<?php

// DEKLARASI CONTROLLER
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketWoController;
use App\Http\Controllers\userHomeController;
use App\Http\Controllers\WoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioWoController;

// ROUTE AWAL 

Route::get('/', function () {
        return view('wo/login');
})->name('login');

// Halaman User
Route::get('user/home', [userHomeController::class, 'index'])->name('user.home');
Route::get('user/home/{id:id_user}', [userHomeController::class, 'show'])->name('user.show');
Route::get('user/weddings', [userHomeController::class, 'list_wedding'])->name('user.weddings');
Route::get('user/pakets', [userHomeController::class, 'list_paket'])->name('user.pakets');
Route::get('user/wo/about/{id_wo}', [WoController::class, 'about_wo'])->name('user.wo.about');
Route::get('user/wo/porto/{id_wo}', [WoController::class, 'porto_wo'])->name('user.wo.porto');
Route::get('user/wo/paket/{id_wo}', [WoController::class, 'paket_wo'])->name('user.wo.paket');
Route::get('user/wo/paket/{id_wo}/{paket}', [WoController::class, 'view_paket'])->name('user.wo.paket.list');

// Halaman admin WO
Route::get('/wo/login', 'App\Http\Controllers\UserController@showLoginForm')->name('login');
Route::post('/wo/login', [UserController::class, 'login']);
Route::get('/wo/logout', [UserController::class, 'logout'])->name('wo.logout');

// khusus untuk WO Paket
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
        Route::get('/wo/portofolio', [PortofolioWoController::class, 'index'])->name('portofolio.home');
});

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

