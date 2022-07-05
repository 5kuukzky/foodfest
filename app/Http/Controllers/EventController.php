<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Makanan;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index', [
            'acara' => Event::get(),
            "title" => "Event"
        ]);
    }

    public function create()
    {
        return view('events.tambahevent', [
            "title" => "Tambah Data Event",
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal' => 'required',
        ]);
        $gambar = $request->gambar;
        $gambar_name = Str::random(5) . '-' . $gambar->getClientOriginalName();
        if ($gambar->move(public_path('storage/image_event/'), $gambar_name)) {
            Event::create([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'gambar' => $gambar_name,
                'tanggal' => $request->tanggal,
            ]);
            return redirect('dashboard');
        }
    }

    public function show($slug)
    {
        // $detail =Event:::where('id', $id)->first(); 
        $detail = Event::where('slug', $slug)->first();
        return view('events.detailevent', ['event' => $detail,  "title" => "List Makanan"]); //banding buat di detail event pake id 
    }

    public function edit($slug)
    {
        return view('events.updateevent', [
            "event" => Event::where('slug', $slug)->first(),
            "title" => "Update event"
        ]);
    }
    public function update(Request $request, $slug)
    {
        Event::where('slug', $slug)->update([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'gambar' => $request->gambar,
            'tanggal' => $request->tanggal,
        ]);
        return redirect('dashboard');
    }

    public function destroy($id)
    {
        Event::find($id)->delete();
        return back();
    }

    public function dashboard()
    {
        return view('dashboard', [
            'acara' => DB::table('events')->get(),
            'provinsi' => DB::table('provinsis')->get(),
            'makanan' => Makanan::all(),
        ]);
    }
}
