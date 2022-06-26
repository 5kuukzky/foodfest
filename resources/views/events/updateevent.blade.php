@extends('layouts.main')
@section('container')

<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="judul" placeholder="Judul Event" value="{{ $event->judul }}">
        <input type="text" name="lokasi" placeholder="Lokasi Event" value="{{ $event->lokasi }}">
        <img src="{{asset("/gambar/event".$event->gambar)}}" alt="">
        <input type="text" name="gambar" placeholder="gambar">
        <small>jika anda ingin mengubah gambar silahkan upload ulang</small>
        <input type="date" name="tanggal" value="{{ $event ->tanggal }}">

        <button type="submit">Update</button>
</form>
@endsection