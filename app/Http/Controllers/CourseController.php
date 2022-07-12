<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\User;
use App\Models\userCourse;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function create()
    {
        return view('course.tambahcourse', [
            "title" => "Tambah Course Baru",
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255|string',
            'slug' => 'required|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'required',
            'harga' => 'required|max:255|numeric',
        ]);
        $video = $request->video;
        $video_name = Str::random(6) . '-' . $video->getClientOriginalName();
        $thumbnail = $request->thumbnail;
        $thumbnail_name = Str::random(6) . '-' . $thumbnail->getClientOriginalName();
        if ($thumbnail->move(public_path('storage/image_thubnail/'), $thumbnail_name) && $video->move(public_path('storage/video_course/'), $video_name)) {
            Course::create([
                'nama' => $request->nama,
                'slug' => $request->slug,
                'thumbnail' => $thumbnail_name,
                'video' => $video_name,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi
            ]);

            return redirect('dashboard');
        }
    }

    public function show()
    {
        $data = Course::get();
        return view('course.index', ['courses' => $data,  "title" => "Our Course"]); //banding buat di detail event pake id 
    }

    public function redeemToken($id)
    {
        $course = Course::find($id);
        $totalPoin = Auth::user()->poin;
        if (Auth::user()->course->where('id_course', $id) == null) {
            $data = userCourse::create([
                'id_user' => Auth::user()->id,
                'id_course' => $id,
            ]);
            if ($data) {
                Auth::user()->update([
                    'poin' => Auth::user()->poin - $course->harga,
                ]);
            }
        }
    }
}
