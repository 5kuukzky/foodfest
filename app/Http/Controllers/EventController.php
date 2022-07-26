<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;

use App\Models\Makanan;
use App\Models\Provinsi;

class EventController extends Controller
{


    public function dashboard()
    {
        return view('dashboard', [
            'provinsi' => Provinsi::get(),
            'makanan' => Makanan::get(),
            'courses' => Course::get(),
        ]);
    }
    public function redirect()
    {
        if (Auth::user()->is_admin == 1) {
            return redirect()->route('dashboard');
        } else if (Auth::user()->is_admin == NULL) {
            return redirect()->route('/');
        }
    }
}
