<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index']);


// khusus event
Route::get('event', [EventController::class, 'index']);
Route::post('event', [EventController::class, 'store']);
Route::get('event/{slug}', [EventController::class, 'show']);


Route::middleware(['auth'])->group(function () {
    // khusus adminn buat crud event
    Route::get('/tambah-event', [EventController::class, 'create']);
    Route::get('edit-event/{slug}', [EventController::class, 'edit']);
    Route::put('edit-event/{slug}', [EventController::class, 'update']);
    Route::get('/event/hapus/{id}', [EventController::class, 'destroy']);

    //khusus admin buat crud provinsi
    Route::get('/tambah-provinsi', [ProvinsiController::class, 'create']);
    Route::get('edit-provinsi/{slug}', [ProvinsiController::class, 'edit']);
    Route::put('edit-provinsi/{slug}', [ProvinsiController::class, 'update']);
    Route::get('/provinsi/hapus/{id}', [ProvinsiController::class, 'destroy']);

    //khusus makanan
    Route::get('/tambah-makanan', [MakananController::class, 'create']);
    Route::get('edit-makanan/{slug}', [MakananController::class, 'edit']);
    Route::put('edit-makanan/{slug}', [MakananController::class, 'update']);
    Route::get('/makanan/hapus/{id}', [MakananController::class, 'destroy']);


    Route::get('/dashboard', [EventController::class, 'dashboard'])->name('dashboard');
});

//khusus provinsi
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/{slug}', [MakananController::class, 'show']);

//khusus makanan
Route::post('makanan', [MakananController::class, 'store']);
Route::get('detail/{slug}', [MakananController::class, 'showDetail']);




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__.'/administrator.php';