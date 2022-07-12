@extends('layouts.main')
@section('container')
<!-- ini buat foto sampul-->

<div class="swiffy-slider slider-nav-autoplay">
    <ul class="slider-container">
        <li> <img src="/assets/images/banner.jpg" class="d-block w-100" alt="Sampul"
                style="height: 60vh; object-fit:cover"></li>
        <li> <img src="/assets/images/banner.jpg" class="d-block w-100" alt="Sampul"
                style="height: 60vh; object-fit:cover"></li>
        <li> <img src="/assets/images/banner.jpg" class="d-block w-100" alt="Sampul"
                style="height: 60vh; object-fit:cover"></li>
    </ul>

    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>

    <div class="slider-indicators">
        <button class="active"></button>
        <button></button>
        <button></button>
    </div>
</div>
<!--search bar -->
<div class="container">
    <div class="justify-content-center row">
        <div class="col-lg-10 col-md-11 col-11">
            <div class="card shadow-sm" style="position: relative;top:-40px;">
                <div class="card-body">
                    <form action="/" method="GET" autocomplete="off">
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
                @if ( $id = Auth::id())
                <p>Total poin anda : {{ Auth::User()->poin }}</p>
                @endif

            </div>
        </div>

        <div class="row text-center">
            @foreach ( $dataMakanan as $makanan )
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/image_makanan/'. $makanan->gambar) }}" class="card-img-top"
                        alt="Makanan" style="height:30vh; object-fit:cover">
                    <div class="card-body">
                        <h5 class="card-title font-semibold text-lg">{{ $makanan->nama }}</h5>
                        <p class="card-text"> {{ $makanan->deskripsi }}</p>
                        <p>Uploaded By:<strong>{{ $makanan->user->name}}</strong></p>
                        <a href="{{ url('detail/'. $makanan->slug) }}" class="btn btn-primary mt-4">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<div class="xl:w mt-12">
    <h1 role="heading" tabindex="0" class="text-8xl font-bold  text-center">Foodfest?</h1>
    <h3 role="contentinfo" tabindex="0" class="text-base font-light text-center mt-4">Lorem Ipsum is simply
        dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy
        text Lorem Ipsum is simply dummy text of the printing</h3>
</div>

<div class="2xl:container 2xl:mx-auto lg:px-20 md:py-12 md:px-6 py-9 px-4">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:gap-8 gap-6">
        <!-- Safe Shopping Grid Card -->
        <div class="p-6 bg-gray-50 dark:bg-green-900 rounded-lg">
            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-7-svg1.svg"
                alt="Safe Shopping">
            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-7-svg1dark.svg"
                alt="Safe Shopping">
            <p class="text-xl text-gray-800 dark:text-white font-semibold leading-5 mt-6">Safe Shopping</p>
            <p class="font-normal text-base leading-6 dark:text-gray-300 text-gray-600 my-4">Our all outlets have
                industry-leading health precautions</p>
            <a
                class="cursor-pointer text-base dark:text-white leading-4 dark:border-white font-medium text-gray-800 border-b-2 border-gray-800 hover:text-gray-600">Learn
                More</a>
        </div>

        <!-- Personal Shopping Grid Card -->
        <div class="p-6 bg-gray-50 dark:bg-yellow-900 rounded-lg">
            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-7-svg2.svg"
                alt="Personal Shopping">
            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-7-svg2dark.svg"
                alt="Personal Shopping">
            <p class="text-xl text-gray-800 dark:text-white font-semibold leading-5 mt-6">Personal Shopping</p>
            <p class="font-normal text-base leading-6 dark:text-gray-300 text-gray-600 my-4">Contact your local outlet
                to book a personal appointment</p>
            <a
                class="cursor-pointer text-base dark:text-white leading-4 dark:border-white font-medium text-gray-800 border-b-2 border-gray-800 hover:text-gray-600">Learn
                More</a>
        </div>

        <!-- Free Shopping Grid Card -->
        <div class="p-6 bg-gray-50 dark:bg-blue-900 rounded-lg">
            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-7-svg3.svg"
                alt="Free Shipping">
            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-7-svg3dark.svg"
                alt="Free Shipping">
            <p class="text-xl text-gray-800 dark:text-white font-semibold leading-5 mt-6">Free Shipping</p>
            <p class="font-normal text-base leading-6 dark:text-gray-300 text-gray-600 my-4">Free shipping all over the
                world on orders above $100</p>
            <a
                class="cursor-pointer text-base dark:text-white leading-4 dark:border-white font-medium text-gray-800 border-b-2 border-gray-800 hover:text-gray-600">Learn
                More</a>
        </div>
    </div>
</div>

@endsection