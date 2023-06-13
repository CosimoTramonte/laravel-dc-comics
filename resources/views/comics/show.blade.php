@extends('layout.main')

@section('content')
    <div class="container py-5">
        <h1 class="my-3 text-center">{{ $comic->title }}</h1>
        <div class="d-flex justify-content-center">
            <a class="btn btn-warning mx-2" href="#"><i class="fa-solid fa-pencil"></i></a>
            <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i></a>
        </div>



        <div class="py-4 d-flex justify-content-center">
            <img class="" src="{{ $comic->thumb }}" alt="">
        </div>

        <div class="text-center">
            <h5>Series: </h5>
            <span class="pb-5">{{ $comic->series }}</span>
            <h5>Type: </h5>
            <span class="pb-5">{{ $comic->type }}</span>
            <h5>Artists: </h5>
            <span class="pb-5">{{ $comic->artists }}</span>
            <h5>Writers: </h5>
            <span class="pb-5">{{ $comic->writers }}</span>
            <h5>Price: </h5>
            <span class="pb-5">{{ $comic->price }}</span>
            <h5>Description: </h5>
            {{-- stampo testo HTML  --}}
            <p>{!! $comic->description !!}</p>

            <button class="btn btn-primary"><a class="text-white text-decoration-none" href="{{ route('comics.index') }}">TORNA ALL'ELENCO</a></button>
        </div>



    </div>
@endsection
