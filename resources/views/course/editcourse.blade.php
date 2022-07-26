@extends('layouts.main')
@section('container')
<div class="container">
    <div class="container">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto">
                <h1 class="text-2xl font-bold text-center text-yellow-500 sm:text-3xl">Edit Course </h1>

                <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti inventore
                    quaerat
                    mollitia?
                </p>

                <form action="" class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    @method('put')
                    @foreach ($errors->all() as $error )
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
                    <div>
                        <label for="email" class="text-sm font-medium">Nama Course</label>
                        <div class="relative mt-1">
                            <input type="text" id="text"
                                class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                placeholder="Masukkan Nama Course" name="nama" autocomplete="off"
                                value="{{ $course->nama }}" />
                        </div>
                    </div>
                    <div>
                        <label for="email" class="text-sm font-medium">Harga</label>
                        <div class="relative mt-1">
                            <input type="number" id="text"
                                class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                placeholder="Masukka Harga Course" name="harga" autocomplete="off" min="0"
                                value="{{ $course->harga }}" />
                        </div>
                    </div>
                    <div>
                        <label for="email" class="text-sm font-medium">File Thumbnail</label>
                        <div class="relative mt-1">
                            <input type="text" id="text"
                                class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                placeholder="Masukkan Nama Course" name="thumbnail" autocomplete="off"
                                value="{{ $course->thumbnail }}" readonly />
                        </div>
                    </div>
                    <div>
                        <label for="video" class="text-sm font-medium">File Video</label>
                        <div class="relative mt-1">
                            <input type="text" id="text"
                                class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                placeholder="Masukkan Nama Course" name="video" autocomplete="off"
                                value="{{ $course->video }}" readonly />
                        </div>
                    </div>
                    <button type="submit"
                        class="inline-block px-6 py-2.5 bg-yellow-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection