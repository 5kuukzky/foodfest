@extends('layouts.main')
@section('container')
<div class="container">
    <form action="/course" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                placeholder="Nama Course" autocomplete="off">
            <input type="text" class="form-control" name="slug" placeholder="slug" autocomplete="off">
            <input type="file" name="thumbnail" placeholder="thumbnail" autocomplete="off">
            <input type="file" name="video" placeholder="video" autocomplete="off">
            <input type="text" name="harga" placeholder="harga" autocomplete="off">

            <button type="submit">Tambah</button>
    </form>
</div>
@endsection