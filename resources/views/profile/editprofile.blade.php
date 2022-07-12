@extends('layouts.main')
@section('container')

<div class="container">
    <h1 class="text-2xl font-bold">Edit Akun</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control" name="name" placeholder="Nama " value="{{ $profile->name }}">
            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $profile->email }}">
            <button type="submit">Update</button>
    </form>
    <h1 class="text-2xl font-bold">Course Anda</h1>

</div>
@endsection