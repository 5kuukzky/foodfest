<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $dataMakanan = Makanan::search($request->search)->get();
        } else {
            $dataMakanan = Makanan::get()->take(3);
        }
        return view('index', [
            'dataMakanan' => $dataMakanan,
            "title" => "Home",

        ]);
    }
}
