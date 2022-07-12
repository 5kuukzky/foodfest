@extends('layouts.main')
@section('container')

<section>
    @foreach ($list as $lists)
    <div class="max-w-screen-xl px-4 py-8 mx-auto">
        <div>
            <span class="inline-block w-12 h-1 bg-red-700"></span>

            <h2 class="mt-1 text-2xl font-extrabold tracking-wide uppercase lg:text-3xl">
                {{ $lists->provinsi->nama }}
            </h2>
        </div>

        <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
            <a href="{{ url('detail/'. $lists->slug) }}" class="block">
                <div class="flex justify-center">
                    <strong class="relative h-6 px-4 text-xs leading-6 text-white uppercase bg-black"> New </strong>
                </div>

                <img alt="{{ $lists->gambar }}" src="{{ asset('storage/image_makanan/'. $lists->gambar) }}"
                    class="object-none  w-full -mt-3 h-96" />

                <h1 class="mt-4 text-lg font-bold object-fill  text-black/90">
                    {{ $lists->nama }}
                </h1>
            </a>
        </div>
    </div>
    @endforeach
</section>

@endsection