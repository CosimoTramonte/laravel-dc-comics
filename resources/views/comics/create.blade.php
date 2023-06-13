@extends('layout.main')

@section('content')

    <div class="container py-5">
        <h1>Creazione Nuovo Comic</h1>

        @if ($errors->any())

            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>

        @endif

        <form action="{{ route('comics.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input
                    type="text"
                    id="title"
                    value="{{ old('title') }}"
                    placeholder="title"
                    name="title"
                    class="form-control @error('title') is-invalid @enderror"
                >
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea
                    type="text"
                    id="description"
                    value="{{ old('description') }}"
                    placeholder="description"
                    name="description"
                    class="form-control @error('description') is-invalid @enderror"
                >
                </textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input
                    type="text"
                    id="thumb"
                    value="{{ old('thumb') }}"
                    placeholder="thumb"
                    name="thumb"
                    class="form-control @error('thumb') is-invalid @enderror"
                >
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                    type="text"
                    id="price"
                    value="{{ old('price') }}"
                    placeholder="price"
                    name="price"
                    class="form-control @error('price') is-invalid @enderror"
                >
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input
                    type="text"
                    id="series"
                    value="{{ old('series') }}"
                    placeholder="series"
                    name="series"
                    class="form-control @error('series') is-invalid @enderror"
                >
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input
                    type="text"
                    id="sale_date"
                    value="{{ old('sale_date') }}"
                    placeholder="YYYY-MM-DD"
                    name="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror"
                >
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input
                    type="text"
                    id="type"
                    value="{{ old('type') }}"
                    placeholder="type"
                    name="type"
                    class="form-control @error('type') is-invalid @enderror"
                >
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input
                    type="text"
                    id="artists"
                    value="{{ old('artists') }}"
                    placeholder="artists"
                    name="artists"
                    class="form-control @error('artists') is-invalid @enderror"
                >
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input
                    type="text"
                    id="writers"
                    value="{{ old('writers') }}"
                    placeholder="writers"
                    name="writers"
                    class="form-control @error('writers') is-invalid @enderror"
                >
            </div>

            <button type="submit" class="btn btn-primary py-2">Send</button>

        </form>

    </div>

@endsection
