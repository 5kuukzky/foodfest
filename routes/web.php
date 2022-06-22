<?php

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

Route::get('provinsi', function () {
    return view('provinsi', [
        "title" => "Provinsi"
    ]);
});

Route::get('event', function () {
    return view('event', [
        "title" => "Event"
    ]);
});

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

Route::get('detailevent', function () {
    return view('detailevent', [
        "title" => "Detail Event"
    ]);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
