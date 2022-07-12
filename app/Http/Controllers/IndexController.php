<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function index(Request $request)
    {

        if ($request->search) {
            $dataMakanan = Makanan::search($request->search)->paginate(6);
        } else {
            $dataMakanan = Makanan::paginate(6);
        }
        // dd(request('search'));


        return view('index', [
            'dataMakanan' => $dataMakanan,
            "title" => "Home",
            // 'poin' => $makanan,
        ]);
    }
}
