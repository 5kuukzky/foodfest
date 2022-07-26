@extends('layouts.main')
@section('container')
@include('layouts.partial.slider')
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
                <h2 class="font-medium text-4xl">Makanan Daerah</h2>
            </div>
        </div>
        <div class="row text-center">
            @forelse ($dataMakanan as $data)

            @empty
            <div class="alert alert-danger">
                <tr>
                    <td align="center">Makanan Tidak ditemukan !.</td>
                </tr>
            </div>
            @endforelse
            @foreach ( $dataMakanan as $makanan )
            <div class="col-md-4 mb-3">
                <div class="card" style="border-radius: 10%">
                    <img src="{{ asset('storage/image_makanan/'. $makanan->gambar) }}" class="card-img-top "
                        alt="Makanan" style="height:30vh; object-fit:cover">
                    <div class="card-body">
                        <h5 class="card-title font-semibold text-lg">{{ $makanan->nama }}</h5>
                        <p class="card-text"> {{ $makanan->excerpt }}</p>
                        <p class="mt-4">Uploaded By:<strong>{{ $makanan->user->name}}</strong></p>
                        <a href="{{ url('detail/'. $makanan->slug) }}" class="btn btn-primary mt-4">See Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="max-w-lg mx-auto text-center my-4">
        <a href="provinsi" class="btn btn-master btn-secondary me-3">
            Read More
        </a>
    </div>

</section>

<section class="text-black bg-slate-100" id="job">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto text-center">
            <div class="xl:w mt-12">
                <h1 role="heading" tabindex="0" class="text-8xl font-bold text-center ">Foodfest?</h1>

            </div>

            <p class="mt-4 text-black">
                Foodfest merupakan sebuah webiste yang menyediakan informasi makananan daerah indonesia.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">

            <a class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-purple-500/10 hover:border-purple-500/10"
                href="/services/digital-campaigns">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-pink-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>

                <h3 class="mt-4 text-xl font-bold text-black">Test</h3>

                <p class="mt-1 text-sm text-black">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                </p>
            </a>
            <a class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-purple-500/10 hover:border-purple-500/10"
                href="/services/digital-campaigns">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-pink-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>

                <h3 class="mt-4 text-xl font-bold text-black">Test</h3>

                <p class="mt-1 text-sm text-black">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                </p>
            </a>
            <a class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-purple-500/10 hover:border-purple-500/10"
                href="/services/digital-campaigns">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-pink-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>

                <h3 class="mt-4 text-xl font-bold text-black">Test</h3>

                <p class="mt-1 text-sm text-black">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                </p>
            </a>
        </div>
    </div>
</section>
@include('layouts.partial.footer')
@endsection