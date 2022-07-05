<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Provinsi;

class MakananController extends Controller
{

    public function create()
    {
        return view('makanan.tambahmakanan', [
            "title" => "Tambah Data Makanan",
            "provinsi" => Provinsi::get(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'slug' => 'required|max:255',
            'id_provinsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cara' => 'required|max:255',
        ]);


        $gambarMkn = $request->gambar;
        $gambar_name = Str::random(6) . '-' . $gambarMkn->getClientOriginalName();
        if ($gambarMkn->move(public_path('storage/image_makanan/'), $gambar_name)) {
            // dd($request->all());
            makanan::create([
                'nama' => $request->nama,
                'slug' => $request->slug,
                'id_provinsi' => $request->id_provinsi,
                'gambar' => $gambar_name,
                'deskripsi' => $request->deskripsi,
                'cara' => $request->cara,
            ]);

            return redirect('dashboard');
        }
    }

    public function show($slug)
    {
        $provinsi = Provinsi::where('slug', $slug)->first();
        $detail = Makanan::where('id_provinsi', $provinsi->id)->get();
        return view('makanan.list', ['list' => $detail,  "title" => "List Makanan Daerah"]); //banding buat di detail event pake id 
    }

    public function showDetail($slug)
    {
        return view('makanan.detail', [
            "title" => "detail makanan",
            "detail" => Makanan::where('slug', $slug)->first(),
        ]);
    }
    public function edit($slug)
    {
        return view('makanan.updatemakanan', [
            "provinsi" => Provinsi::get(),
            "makanan" => Makanan::where('slug', $slug)->first(),
            "title" => "Update Makanan"
        ]);
    }
    public function update(Request $request, $slug)
    {
        Makanan::where('slug', $slug)->update([
            'nama' => $request->nama,
            'id_provinsi' => $request->id_provinsi,
            'slug' => $request->slug,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'cara' => $request->cara,
        ]);
        return redirect('dashboard');
    }

    public function destroy($id)
    {
        Makanan::find($id)->delete();
        // dd('makanan');
        return redirect()->route('dashboard')->with(['message' => 'Successfully deleted!!']);
    }
}
