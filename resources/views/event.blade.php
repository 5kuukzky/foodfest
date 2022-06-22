@extends('layouts.main')
@section('container')
<!-- ini buat foto sampul-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/images/event/1.jpg" class="d-block w-100" alt="Sampul"
                style="height: 60vh; object-fit:cover">
        </div>
    </div>
</div>
.<div class="container">
    <h1 class="text-2xl font-bold mb-4">Segera Hadir</h1>
    <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4">
        <a class="relative block group" href="detailevent">
            <span class="absolute inset-0 border-2 border-black border-dashed rounded-lg" aria-hidden="true"></span>
            <div
                class="transition bg-white border-2 border-black rounded-lg group-hover:-translate-x-2 group-hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-start justify-between"><span class="text-xl" role="img"
                            aria-hidden="true">🚨</span>
                        <div class="flex gap-1.5 items-center -mt-3 -mr-3"></div>
                    </div>
                    <p class="mt-4 text-lg font-medium">Festival Jajanan Bango</p>
                    <p class="mt-1 text-xs">Jakarta</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection