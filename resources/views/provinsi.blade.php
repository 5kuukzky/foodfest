@extends('layouts.main')
@section('container')
<div class="container">
    <section>
        <div class="row text-center mb-2">
            <h1 class="mt-4 font-normal hover:font-bold text-4xl">Provinsi</h1>
        </div>
        <div class="max-w-screen-md px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                <a class="block p-4 border-2 border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-yellow-400 hover:ring-1 hover:ring-gray-200"
                    href="list">
                    <span class="inline-block p-3 rounded-lg bg-gray-50 justify-center item-center">
                        <img src="/assets/images/provinsi/dki.png" alt="Provinsi" class="w-24 h-24">
                    </span>

                    <h6 class="mt-2 font-bold">DKI Jakarta</h6>

                    <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>

                <a class="block p-4 border-2 border-gray-100 shadow-sm rounded-xl focus:outline-none focus:ring hover:border-yellow-400 hover:ring-1 hover:ring-gray-200"
                    href="list">
                    <span class="inline-block p-3 rounded-lg bg-gray-50 justify-center item-center">
                        <img src="/assets/images/provinsi/dki.png" alt="Provinsi" class="w-24 h-24 ">
                    </span>

                    <h6 class="mt-2 font-bold">DKI Jakarta</h6>

                    <p class="hidden sm:mt-1 sm:text-sm sm:text-gray-600 sm:block">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </a>
            </div>
    </section>

    @endsection