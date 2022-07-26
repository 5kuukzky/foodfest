<?php

use App\Models\Makanan;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index'])->name('/');



Route::middleware(['auth'])->group(function () {

    Route::get('redirect', [EventController::class, 'redirect']);
    Route::get('/tambah-makanan', [MakananController::class, 'create']);
    Route::post('makanan', [MakananController::class, 'store']);

    //edit akun
    Route::get('profile', [ProfileController::class, 'edit']);
    Route::put('profile', [ProfileController::class, 'update']);
    Route::get('logout', [ProfileController::class, 'logout']);

    Route::get('redeem/{id}', [CourseController::class, 'redeemToken']);

    Route::middleware(['adminfood'])->group(function () {
        Route::get('/dashboard', [EventController::class, 'dashboard'])->name('dashboard');
        //khusus admin buat crud provinsi
        Route::get('/tambah-provinsi', [ProvinsiController::class, 'create']);
        Route::get('edit-provinsi/{slug}', [ProvinsiController::class, 'edit']);
        Route::put('edit-provinsi/{slug}', [ProvinsiController::class, 'update']);
        Route::get('/provinsi/hapus/{id}', [ProvinsiController::class, 'destroy']);
        Route::post('provinsi', [ProvinsiController::class, 'store']);

        //khusus makanan
        Route::get('edit-makanan/{slug}', [MakananController::class, 'edit']);
        Route::put('edit-makanan/{slug}', [MakananController::class, 'update']);
        Route::get('/makanan/hapus/{id}', [MakananController::class, 'destroy']);

        //khusus course
        Route::get('/tambah-course', [CourseController::class, 'create']);
        Route::post('course', [CourseController::class, 'store']);
        Route::get('edit-course/{slug}', [CourseController::class, 'edit']);
        Route::put('edit-course/{slug}', [CourseController::class, 'update']);
        Route::get('/course/hapus/{id}', [CourseController::class, 'destroy']);
    });
});

//khusus provinsi

// Route::resource('provinsi', ProvinsiController::class);
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::get('provinsi/{slug}', [MakananController::class, 'show']);

//khusus makanan
Route::get('detail/{slug}', [MakananController::class, 'showDetail']);

//khusus course
Route::get('course',  [CourseController::class, 'show']);


Route::view('about-us', 'aboutus', [
    "title" => "About Us",
]);

require __DIR__ . '/auth.php';
require __DIR__ . '/administrator.php';
