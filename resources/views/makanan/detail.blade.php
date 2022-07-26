@extends('layouts.main')
@section('container')
<section>
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8 sm:py-24">
        <div class="max-w-3xl">
            <h2 class="text-3xl font-bold sm:text-4xl">
                {{ $detail->nama }}
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-8 mt-8 lg:gap-16 lg:grid-cols-2">
            <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
                <img class="absolute inset-0 object-cover w-full h-full"
                    src="{{ asset('storage/image_makanan/'. $detail->gambar) }}" alt="Man using a computer" />
            </div>

            <div class="lg:py-16">
                <article class="space-y-4 text-gray-600">
                    <h1 class="text-xl font-bold">Asal Daerah</h1>
                    <p> {{ $detail->provinsi->nama}} </p>
                    <h1 class="text-xl font-bold">
                        Deskripsi
                    </h1>
                    <p class="text-justify">
                        {{$detail->deskripsi}}
                    </p>
                </article>
            </div>
        </div>
        <section>
            <div class="container">
                <h2 class="text-3xl font-bold sm:text-4xl mt-24">Anda Mungkin Suka</h2>
                <div class="row text-center">
                    @foreach ($rekomend as $lists)
                    <div class="col-md-4 my-4">
                        <div class="card" style="border-radius: 10%">
                            <img src="{{ asset('storage/image_makanan/'. $lists->gambar) }}" class="card-img-top"
                                alt="News" style="height:32vh; object-fit:cover">
                            <div class="card-body">
                                <h5 class="card-title font-semibold text-lg">{{ $lists->nama }}</h5>
                                <p class="card-text"> {{ $lists->excerpt }}</p>
                                <a href="{{ url('detail/'. $lists->slug) }}" class="btn btn-primary mt-4">Go
                                    somewhere</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>
@endsection