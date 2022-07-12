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
                        <img alt="Makanan" class="object-contain rounded-xl" style="height:40vh; object-fit:contain"
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
</section>
@endsection