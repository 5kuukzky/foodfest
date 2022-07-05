@extends('layouts.main')
@section('container')
<style>
    .no-spinners {
        -moz-appearance: textfield;
    }

    .no-spinners::-webkit-outer-spin-button,
    .no-spinners::-webkit-inner-spin-button {
        margin: 0;
        -webkit-appearance: none;
    }
</style>

<section>
    <div class="container">
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto">
            <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 mt-8">
                    <div class="aspect-w-1 aspect-h-1">
                        <img alt="Makanan" class="object-contain rounded-xl"
                            src="{{ asset('storage/image_makanan/'. $detail->gambar) }}" />
                    </div>
                </div>

                <div class="sticky top-0">
                    <div class="flex justify-between mt-8">
                        <div class="max-w-[35ch]">
                            <h1 class="text-4xl font-bold">
                                {{ $detail->nama }}
                            </h1>
                        </div>
                    </div>

                    <div class="flex justify-between mt-8">
                        <div class="max-w-[35ch]">
                            <h1 class="text-xl font-bold">
                                Asal Daerah
                            </h1>
                        </div>
                    </div>
                    <details class="relative mt-2 group">
                        <summary class="block">
                            <div>
                                <div class="prose max-w-none group-open:hidden">
                                    <p>
                                        {{ $detail->provinsi->nama}}
                                    </p>
                                </div>
                            </div>
                        </summary>

                    </details>
                    <div class="flex justify-between mt-8">
                        <div class="max-w-[35ch]">
                            <h1 class="text-xl font-bold">
                                Deskripsi
                            </h1>
                        </div>
                    </div>
                    <details class="relative mt-2 group">
                        <summary class="block">
                            <div>
                                <div class="prose max-w-none group-open:hidden">
                                    <p>
                                        {{$detail->deskripsi}}
                                    </p>
                                </div>

                                <span
                                    class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0">
                                    Read More
                                </span>
                            </div>
                        </summary>
                    </details>
                    <div class="flex justify-between mt-8">
                        <div class="max-w-[35ch]">
                            <h1 class="text-xl font-bold">
                                Cara Membuat
                            </h1>
                        </div>
                    </div>
                    <details class="relative mt-2 group">
                        <summary class="block">
                            <div>
                                <div class="prose max-w-none group-open:hidden">
                                    <p>
                                        {{$detail->cara}}
                                    </p>
                                </div>

                                <span
                                    class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0">
                                    Read More
                                </span>
                            </div>
                        </summary>

                        <div class="pb-6 prose max-w-none">

                        </div>
                    </details>
                </div>
            </div>
            <div class="row text-center mb-2 mt-24">
                <h1 class="mt-8 font-medium text-4xl">Provinsi</h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full bg-white p-4">
                <div class="p-6 md:p-10 rounded-xl bg-yellow-100">
                    <div class="inline-flex rounded-full bg-white p-4">
                        <svg class="w-8 h-8 text-primary fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <defs>
                                <style>
                                    .fa-secondary {
                                        opacity: .4
                                    }
                                </style>
                            </defs>
                            <path
                                d="M560 224h-29.51a159.88 159.88 0 0 0-37.38-52.46L512 96h-32c-29.4 0-55.39 13.5-73 34.32-7.57-1.1-15.12-2.32-23-2.32H256c-94.82 0-160 78.88-160 160a159.75 159.75 0 0 0 64 128v80a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-48h128v48a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-80.72A160.37 160.37 0 0 0 511.28 384H560a16 16 0 0 0 16-16V240a16 16 0 0 0-16-16zm-128 64a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"
                                class="fa-secondary"></path>
                            <path
                                d="M51.26 255.52a24 24 0 0 1-18.74-28.3C34.74 215.82 45.4 208 57 208h1a6 6 0 0 0 6-6v-20a6 6 0 0 0-6-6C29.5 176 4.1 196.4.47 224.62a54.64 54.64 0 0 0-.47 7.23A56.08 56.08 0 0 0 56 288h40a155.05 155.05 0 0 1 3.37-32H56a23.63 23.63 0 0 1-4.74-.48zM432 256a16 16 0 1 0 16 16 16 16 0 0 0-16-16zM306.5 0a96 96 0 0 0-88.81 132.51A162.64 162.64 0 0 1 256 128h128a104.31 104.31 0 0 1 12.71.88A96.06 96.06 0 0 0 306.5 0z">
                            </path>
                        </svg>
                    </div>

                    <h3 class="mt-4 text-base md:text-xl font-medium text-gray-800">
                        Your feature here
                    </h3>
                    <p class="mt-4 text-base md:text-lg text-gray-600">
                        Your feature description summary here.
                    </p>
                </div>
            </div>
        </div>
</section>


@endsection