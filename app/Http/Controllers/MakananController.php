<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



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
            'nama' => 'required|unique:makanans,nama|string',
            'deskripsi' => 'required',
            'id_provinsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $excerpt = Str::words($request->deskripsi, 12);
        $slug = Str::slug($request->nama, '-');
        $id = Auth::id();
        $gambarMkn = $request->gambar;
        $gambar_name = Str::random(6) . '-' . $gambarMkn->getClientOriginalName();
        if ($gambarMkn->move(public_path('storage/image_makanan/'), $gambar_name)) {
            // dd($request->all());
            $makanan = makanan::create([
                'nama' => $request->nama,
                'slug' => $slug,
                'excerpt' => $excerpt,
                'id_provinsi' => $request->id_provinsi,
                'id_user' => $id,
                'gambar' => $gambar_name,
                'deskripsi' => $request->deskripsi,

            ]);
            if ($makanan) {
                Auth::User()->update([
                    'poin' => Auth::user()->poin + 1
                ]);
            }

            return redirect('dashboard');
        }
    }

    public function show($slug)
    {
        $provinsi = Provinsi::where('slug', $slug)->first();
        $detail = Makanan::where('id_provinsi', $provinsi->id)->paginate(6);
        return view('makanan.list', ['list' => $detail,  "title" => "List Makanan Daerah"]);
    }

    public function showDetail($slug)
    {
        $rekomen = Makanan::inRandomOrder()->limit(3)->get();
        return view('makanan.detail', [
            "title" => "detail makanan",
            "detail" => Makanan::where('slug', $slug)->first(),
            'rekomend' => $rekomen,
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
        $slugs = Str::slug($request->nama, '-');
        Makanan::where('slug', $slug)->update([
            'nama' => $request->nama,
            'id_provinsi' => $request->id_provinsi,
            'slug' => $slugs,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('dashboard');
    }

    public function destroy($id)
    {
        Makanan::find($id)->delete();
        return redirect()->route('dashboard')->with(['message' => 'Successfully deleted!!']);
    }
}
