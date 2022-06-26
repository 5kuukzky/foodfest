@extends('layouts.main')
@section('container')

<form action="/event/{{ $ubah->id }}" method="post">

    @csrf
    <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="judul" placeholder="Judul Event" value="{{ $ubah->judul }}">
        <input type="text" name="lokasi" placeholder="Lokasi Event" value="{{ $ubah->lokasi }}">
        <input type="text" name="gambar" placeholder="gambar" value="{{ $ubah->gambar}}">
        <input type="date" name="tanggal" value="{{ $ubah ->tanggal }}">

        <button type="submit">Update</button>
</form>
@endsection