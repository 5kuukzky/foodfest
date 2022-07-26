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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
            'harga' => 'required|max:255|numeric',
        ]);
        $slug = Str::slug($request->nama, '-');
        $video = $request->video;
        $video_name = Str::random(6) . '-' . $video->getClientOriginalName();
        $thumbnail = $request->thumbnail;
        $thumbnail_name = Str::random(6) . '-' . $thumbnail->getClientOriginalName();
        if ($thumbnail->move(public_path('storage/image_thubnail/'), $thumbnail_name) && $video->move(public_path('storage/video_course/'), $video_name)) {
            Course::create([
                'nama' => $request->nama,
                'slug' => $slug,
                'thumbnail' => $thumbnail_name,
                'video' => $video_name,
                'harga' => $request->harga,
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
        if ($totalPoin >= $course->harga) {
            if (Auth::user()->course->where('id_course', $id)->count() == 0) {
                $data = userCourse::create([
                    'id_user' => Auth::user()->id,
                    'id_course' => $id,
                ]);
                if ($data) {
                    Auth::user()->update([
                        'poin' => Auth::user()->poin - $course->harga,
                    ]);
                }
                return redirect()->back()->with('status', 'Penukaran Berhasil! Silahkan Cek Akun Anda');
            } else {
                return redirect()->back()->with('gagal', 'Sudah Pernah Menukarkan Coure Ini!');
            }
        } else {
            return redirect()->back()->with('gagal', 'Poin Anda Tidak Cukup!');
        }
    }

    public function edit($slug)
    {
        $courses = Course::where('slug', $slug)->first();
        return view('course.editcourse', [
            'title' => 'Edit Course',
            'course' => $courses,
        ]);
    }

    public function update(Request $request, $slug)
    {
        $slugs = Str::slug($request->nama, '-');
        Course::where('slug', $slug)->update([
            'nama' => $request->nama,
            'thumbnail' => $request->thumbnail,
            'slug' => $slugs,
            'harga' => $request->harga,
            'video' => $request->video,
        ]);
        return redirect('dashboard');
    }

    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect()->route('dashboard')->with(['message' => 'Successfully deleted!!']);
    }
}
