@extends('layout.main')

@section('content')
    <div class="container py-5">
        <h1>ELENCO FUMETTI</h1>

        <table class="table py-5">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">TYPE</th>
                <th scope="col">PRICE</th>
                <th scope="col">SERIES</th>
                <th scope="col">DETAIL</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $comics as $comic )

                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td><a class="btn btn-success" href="{{ route('comics.show', $comic ) }}">VAI</a></td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>
@endsection