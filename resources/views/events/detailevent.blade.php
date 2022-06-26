@extends('layouts.main')
@section('container')
<section>
    <div class="px-4 py-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:h-screen">
            <div class="relative z-10 lg:py-16">
                <div class="relative h-64 sm:h-80 lg:h-full">
                    <img class="absolute inset-0 object-cover w-full h-full" src="/assets/images/event/1.jpg"
                        alt="Event  " />
                </div>
            </div>

            <div class="relative flex items-center bg-gray-100">
                <span class="hidden lg:inset-y-0 lg:absolute lg:w-16 lg:bg-gray-100 lg:block lg:-left-16"></span>

                <div class="p-8 sm:p-16 lg:p-24">
                    <h1 class="text-2xl font-bold sm:text-3xl">
                        {{ $event->judul }}

                    </h1>

                    <p class="mt-4 text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid,
                        molestiae! Quidem est esse numquam odio deleniti, beatae, magni
                        dolores provident quaerat totam eos, aperiam architecto eius quis
                        quibusdam fugiat dicta.
                    </p>
                </div>
            </div>
        </div>
</section>
@endsection