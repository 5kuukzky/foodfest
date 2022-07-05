@extends('layouts.main')
@section('container')

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Makanan" value="{{ $makanan->nama }}">
            <select name="id_provinsi" id="">
                <option value="">Pilih Provinsi</option>
                @foreach ($provinsi as $data )
                <option value="{{ $data->id}}" {{ $data->id==$makanan->id_provinsi ? 'selected' : '' }}>{{ $data->nama}}
                </option>
                @endforeach
            </select>
            <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $makanan->slug }}">
            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                value="{{ $makanan->deskripsi }}">
            <img src="{{asset(" /gambar/makanan".$makanan->gambar)}}" alt="">
            <input type="text" name="gambar" placeholder="gambar" value="{{ $makanan->gambar }}">
            <input type="text" class="form-control" name="cara" placeholder="Cara" value="{{ $makanan->cara }}">
            <button type="submit">Update</button>
    </form>
</div>
@endsection