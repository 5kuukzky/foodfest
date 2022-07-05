<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $dataMakanan = Makanan::search($request->search)->paginate(6);
        } else {
            $dataMakanan = DB::table('makanans')->paginate(6);
        }
        // dd(request('search'));


        return view('index', [
            'dataMakanan' => $dataMakanan,
            "title" => "Home",
        ]);
    }
}
