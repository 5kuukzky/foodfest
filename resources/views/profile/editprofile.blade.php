@extends('layouts.main')
@section('container')

<div class="container">
    <h1 class="text-2xl font-bold mt-4">Edit Akun</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            @foreach ($errors->all() as $error )
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
            <div>
                <label for="nama" class="text-sm font-medium mt-4">Nama Anda</label>

                <div class="relative mt-1">
                    <input type="text" id="text" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                        placeholder="Masukkan Nama" name="name" autocomplete="off" value="{{ $profile->name }}" />

                </div>
                <label for="email" class="text-sm font-medium mt-4">Email Anda</label>
                <div class="relative mt-1">
                    <input type="text" id="text" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                        placeholder="Masukkan Email" name="email" autocomplete="off" value="{{ $profile->email }}" />

                </div>
            </div>
            <button type="submit"
                class="inline-block  my-8 px-6 py-2.5 bg-yellow-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Update</button>
    </form>
    @if (session('empty'))
    <div class="alert alert-danger">
        {{ session('empty') }}
    </div>
    @endif
    <h1 class="text-2xl font-bold mt-6">Course Anda</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-4 w-full">
        @foreach ($course as $yourcourse )
        <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden shadow hover:shadow-md"
            style="min-height: 160px">
            <div>
                <div class="relative block h-full">
                    <video width="320" height="240" controls
                        src="{{ asset('storage/video_course/'. $yourcourse->course->video) }}" type="video/mp4">
                </div>
            </div>
            <h2 class="mt-2 text-gray-800 text-lg font-semibold line-clamp-1">
                {{ $yourcourse->course->nama }}
            </h2>
        </div>
        @endforeach
    </div>
</div>
@endsection