@extends('layouts.main')
@section('container')
<div class="container">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto">
            <h1 class="text-2xl font-bold text-center text-yellow-500 sm:text-3xl">Tambah Makanan</h1>

            <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
                Tambahkan makanan Lestarikan budaya ! Kumpulkan Poin Dapatkann Hadiah
            </p>

            <form action="/makanan" class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl" enctype="multipart/form-data"
                method="POST">
                @csrf
                @foreach ($errors->all() as $error )
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach
                <div>
                    <label for="email" class="text-sm font-medium">Nama Makanan</label>

                    <div class="relative mt-1">
                        <input type="text" id="text"
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                            placeholder="Masukkan Nama Maknan" name="nama" autocomplete="off" />

                    </div>
                </div>
                <div>
                    <label for="deskripsi" class="text-sm font-medium">Deskripsi</label>
                    <div class="relative mt-1">
                        <textarea type="text" name="deskripsi"
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                            placeholder="Masukkan Deskripsi" autocomplete="off"> </textarea>
                    </div>
                </div>
                <div>
                    <select name="id_provinsi" id="">
                        <option value="">Pilih Provinsi</option>
                        @foreach ($provinsi as $data )
                        <option value="{{ $data->id}}">{{ $data->nama}}</option>
                        @endforeach
                    </select>
                    <label for=""></label>
                </div>
                <input type="file" name="gambar" placeholder="gambar">

                <button type="submit"
                    class="inline-block px-6 py-2.5 bg-yellow-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection