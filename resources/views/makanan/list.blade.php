@extends('layouts.main')
@section('container')

<section>
    <div class="container">
        <h2 class="text-3xl font-bold sm:text-4xl my-12">Makanan Khas</h2>
        <div class="row text-center">
            @foreach ($list as $lists)
            <div class="col-md-4 my-4">
                <div class="card" style="border-radius: 10%">
                    <img src="{{ asset('storage/image_makanan/'. $lists->gambar) }}" class="card-img-top" alt="News"
                        style="height:32vh; object-fit:cover">
                    <div class="card-body">
                        <h5 class="card-title font-semibold text-lg">{{ $lists->nama }}</h5>
                        <p class="card-text"> {{ $lists->excerpt }}</p>
                        <a href="{{ url('detail/'. $lists->slug) }}" class="btn btn-primary mt-4">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection