<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});


// khusus event
Route::get('event', [EventController::class, 'index']);
Route::post('event', [EventController::class, 'store']);
Route::get('event/detailevent/{id}', [EventController::class, 'show']);

// khusus adminn buat crud event
Route::get('event/tambahevent', [EventController::class, 'create']);
Route::get('event/edit/{id}', [EventController::class, 'edit']);
Route::post('event/edit/{id}', [EventController::class, 'update']);





Route::get('provinsi', [ProvinsiController::class, 'index']);


Route::get('list', function () {
    return view('list', [
        "title" => "List"
    ]);
});

Route::get('detail', function () {
    return view('detail', [
        "title" => "Detail"
    ]);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
