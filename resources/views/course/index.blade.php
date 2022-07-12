@extends('layouts.main')
@section('container')
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

    <div class="slider-indicators-higlight">
        <button class="active"></button>
        <button></button>
        <button></button>
    </div>
</div>
<div class="container">
    <div class="xl:w">
        <h1 role="heading" tabindex="0" class="text-5xl font-bold  text-center">Tukarkan poin dengan course yang kami
            sediakan!</h1>
        <h3 role="contentinfo" tabindex="0" class="text-base font-light text-center mt-4">Lorem Ipsum is simply
            dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy
            text Lorem Ipsum is simply dummy text of the printing</h3>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-4 w-full">
        @foreach ($courses as $course )

        <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden shadow hover:shadow-md"
            style="min-height: 160px">
            <div>
                <div class="relative block h-full">
                    <img src="{{ asset('storage/image_thubnail/'. $course->thumbnail) }}" alt="{{ $course->nama }}"
                        class="h-48">
                </div>
            </div>
            <h2 class="mt-2 text-gray-800 text-lg font-semibold line-clamp-1">
                {{ $course->nama }}
            </h2>
            <p class="mt-2 text-gray-800 text-sm"><strong>{{$course->harga}} Poin</strong></p>

            <button
                class="mt-4 px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-md w-full">
                Tukar
            </button>
        </div>
    </div>
    @endforeach
</div>
@endsection