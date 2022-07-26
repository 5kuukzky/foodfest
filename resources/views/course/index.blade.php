@extends('layouts.main')
@section('container')
@include('layouts.partial.slider')
<div class="container">
    <div class="xl:w">
        <h1 role="heading" tabindex="0" class="text-5xl font-bold text-center mt-6">Tukarkan poin dengan course yang
            kami
            sediakan!</h1>
        <h3 role="contentinfo" tabindex="0" class="text-base font-light text-center mt-4">Kami menyediakan berbagai
            course dalam bentuk video <br>Silahkan pilih dan tukarkan poin sesuai dengan course yanng anda mau</h3>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if (session('gagal'))
    <div class="alert alert-danger">
        {{ session('gagal') }}
    </div>
    @endif
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 my-4 w-full">
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

            <a href="redeem/{{$course->id}}" class="btn btn-master btn-primary">
                Tukar
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection