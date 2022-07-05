@extends('layouts.main')
@section('container')
<div class="container">
    <form action="/makanan" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <select name="id_provinsi" id="">
                <option value="">Pilih Provinsi</option>
                @foreach ($provinsi as $data )
                <option value="{{ $data->id}}">{{ $data->nama}}</option>
                @endforeach
            </select>
            <label for=""></label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                placeholder="Nama Makanan">
            <input type="text" class="form-control" name="slug" placeholder="slug">
            <input type="file" name="gambar" placeholder="gambar">
            <input type="text" name="deskripsi" placeholder="Deskripsi">
            <input type="text" name="cara" placeholder="Cara">

            <button type="submit">Kirim</button>
    </form>
</div>
@endsection