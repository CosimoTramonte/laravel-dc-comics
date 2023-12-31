@extends('layout.main')

@section('content')
    <div class="container py-5">
        <h1 class="d-inline">ELENCO FUMETTI</h1>
        <a class="btn btn-success mb-3 mx-3" href="{{ route('comics.create') }}"><i class="fa-solid fa-plus"></i></a>


        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
        @endif

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
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic ) }}"><i class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic ) }}"><i class="fa-solid fa-pencil"></i></a>

                            <form
                              class="d-inline"
                              action="{{ route('comics.destroy', $comic) }}"
                              method="POST"
                              onsubmit="return confirm('Confermi l\'eliminazione del prodotto:  {{ $comic->title }} ?')"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>


                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>
@endsection
