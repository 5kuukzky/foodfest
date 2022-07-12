@extends('layouts.main')
@section('container')
<div class="container">
    @error('nama', 'slug')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
    <form action="/provinsi" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control @error('nama')is-invalid" @enderror name="nama"
                placeholder="Nama Provinsi">
            @error('nama')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
            <input type="text" class="form-control @error('nama')is-invalid" @enderror name="slug" placeholder="Slug">
            <input type="file" name="logo" placeholder="logo">
            <input type="text" name="deskripsi" placeholder="Deskripsi">

            <button type="submit">Kirim</button>
    </form>
</div>
@endsection