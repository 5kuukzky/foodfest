<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Makanan;
use App\Models\Provinsi;

class EventController extends Controller
{


    public function dashboard()
    {
        return view('dashboard', [
            'provinsi' => Provinsi::get(),
            'makanan' => Makanan::all(),
            'courses' => Course::all(),
        ]);
    }
}
