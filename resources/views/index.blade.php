@extends('layouts.main')
@section('container')
<!-- ini buat foto sampul-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/images/banner.jpg" class="d-block w-100" alt="Sampul"
                style="height: 60vh; object-fit:cover">
        </div>
    </div>
</div>

<!--search bar -->
<div class="container">
    <div class="justify-content-center row">
        <div class="col-lg-10 col-md-11 col-11">
            <div class="card shadow-sm" style="position: relative;top:-40px;">
                <div class="card-body">
                    <form action="/" method="GET">
                        <div class="form-group">
                            <div class="input-group">
                                <button class="btn border-0 btn-lg" type="button" id="button-addon1">
                                    <i class="fa-solid fa-magnifying-glass"></i></button>
                                <input type="text" class="form-control form-control-lg border-0" name="search"
                                    id="search" placeholder="Cari makanan daerah Indonesia">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- makanan-->
<section id="makanan">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2 class="font-medium  text-2xl">Makanan Daerah</h2>
            </div>
        </div>
        <div class="row text-center">
            @foreach ( $dataMakanan as $makanan )

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/image_makanan/'. $makanan->gambar) }}" class="card-img-top"
                        alt="Makanan">
                    <div class="card-body">
                        <h5 class="card-title">{{ $makanan->nama }}</h5>
                        <p class="card-text"> {{ $makanan->deskripsi }}</p>
                        <a href="#" class="btn btn-primary mt-4">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection