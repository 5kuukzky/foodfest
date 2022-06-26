@extends('layouts.main')
@section('container')

<form action="/event" method="post">

    @csrf
    <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="judul" placeholder="Judul Event">
        <input type="text" name="lokasi" placeholder="Lokasi Event">
        <input type="text" name="gambar" placeholder="gambar">
        <input type="date" name="tanggal" id="">

        <button type="submit">Kirim</button>
</form>
@endsection