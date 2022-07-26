<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinsiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $dataProvinsi = Provinsi::search($request->search)->paginate(12);
        } else {
            $dataProvinsi = Provinsi::paginate(12);
        }
        // dd(request('search'));


        return view('provinsi.index', [
            'provinsi' => $dataProvinsi,
            "title" => "Provinsi",
        ]);
    }

    public function create()
    {
        return view('provinsi.tambahprovinsi', [
            "title" => "Tambah Data Provinsi",
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $slug = Str::slug($request->nama, '-');
        $logo = $request->logo;
        $gambar_name = Str::random(6) . '-' . $logo->getClientOriginalName();
        if ($logo->move(public_path('storage/image_provinsi/'), $gambar_name)) {
            Provinsi::create([
                'nama' => $request->nama,
                'slug' => $slug,
                'logo' => $gambar_name,
            ]);

            return redirect('dashboard');
        }
    }


    public function show($slug)
    {
        $detail = Provinsi::where($slug)->first();
        return view('makanan.list', ['makanan' => $detail,  "title" => "List Makanan"]); //banding buat di detail event pake id 
    }


    public function edit($slug)
    {
        return view('provinsi.updateprovinsi', [
            "provinsi" => Provinsi::where('slug', $slug)->first(),
            "title" => "Update Provinsi"
        ]);
    }

    public function update(Request $request, $slug)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255|string',
            'logo' => 'required',
            'slug' => 'required,'
        ]);
        $slugs = Str::slug($request->nama, '-');
        Provinsi::where('slug', $slug)->update([
            'nama' => $request->nama,
            'slug' => $slugs,
            'logo' => $request->logo,
        ]);
        return redirect('dashboard');
    }

    public function destroy($id)
    {
        Provinsi::find($id)->delete();
        return back();
    }
}
