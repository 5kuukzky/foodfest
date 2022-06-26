<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        return view('events.index', [
            'acara' => DB::table('events')->get(), // passing variabel buat nampilin di index
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
        Event::create([
            'judul' => $request->judul,
            'lokasi' => $request->lokasi,
            'gambar' => $request->gambar,
            'tanggal' => $request->tanggal
        ]);

        return redirect('dashboard');
    }

    public function show($id)
    {
        $detail = Event::find($id);
        return view('events.detailevent', ['event' => $detail,  "title" => "Detail Event"]); //banding buat di detail event pake id 
    }

    public function edit($id)
    {

        return view('events.updateevent', ["Event" => "Edit Event"]);
    }
}
