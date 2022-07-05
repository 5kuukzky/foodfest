@extends('layouts.main')
@section('container')
<div class="container">
    <form action="/provinsi" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Provinsi">
            <input type="text" class="form-control" name="slug" placeholder="Slug">
            <input type="file" name="logo" placeholder="logo">
            <input type="text" name="deskripsi" placeholder="Deskripsi">

            <button type="submit">Kirim</button>
    </form>
</div>
@endsection