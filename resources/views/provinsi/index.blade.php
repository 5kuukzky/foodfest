@extends('layouts.main')
@section('container')
<div class="container">
    <section>
        <div class="row text-center mb-2">
            <h1 class="mt-8 font-normal hover:font-bold text-4xl">Provinsi</h1>
        </div>

        <form class="flex items-center" action="/provinsi" method="GET">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-yellow-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 shadow-sm  "
                    placeholder="Search" required="" name="search">
            </div>
            <button type="submit"
                class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                    class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg></button>
        </form>

        <div class="max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8 ">
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">
                @foreach ($provinsi as $p)
                <a class="block p-4 border-2 border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-yellow-400 hover:ring-1 hover:ring-gray-200"
                    href="{{ url('provinsi/'. $p->slug) }}">
                    <span class="inline-block p-3 rounded-lg bg-gray-50 justify-center item-center">
                        <img src="{{ asset('storage/image_provinsi/'. $p->logo) }}" alt="Provinsi" class="w-24 h-24">
                    </span>
                    <h6 class="mt-2 font-bold">{{ $p->nama }}</h6>
                    <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                        {{ $p->deskripsi }}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
        {{ $provinsi->links() }}
    </section>
</div>
@endsection