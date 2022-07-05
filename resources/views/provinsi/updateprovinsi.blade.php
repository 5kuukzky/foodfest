@extends('layouts.main')
@section('container')

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Provinsi"
                value="{{ $provinsi->nama }}">
            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                value="{{ $provinsi->deskripsi }}">
            <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $provinsi->slug }}">
            <img src="{{asset(" /gambar/provinsi".$provinsi->logo)}}" alt="">
            <input type="text" name="logo" placeholder="gambar" value="{{ $provinsi->logo }}">
            <button type="submit">Update</button>
    </form>
</div>
@endsection