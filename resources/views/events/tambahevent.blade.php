@extends('layouts.main')
@section('container')
<div class="container">
    <form action="/event" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control" name="judul" placeholder="Judul Event">
            <input type="text" class="form-control" name="slug" placeholder="Slug">
            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
            <input type="text" name="lokasi" placeholder="Lokasi Event">
            <input type="file" name="gambar" placeholder="gambar">
            <input type="date" name="tanggal" id="">

            <button type="submit">Kirim</button>
    </form>
</div>
@endsection