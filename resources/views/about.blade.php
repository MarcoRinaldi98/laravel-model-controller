@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <div class="container-lg">
        <h1 class="text-primary py-5 text-center">Elenco dei film</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-primary" scope="col">ID</th>
                    <th class="text-primary" scope="col">Titolo</th>
                    <th class="text-primary" scope="col">Titolo Originale</th>
                    <th class="text-primary" scope="col">Nazionalità</th>
                    <th class="text-primary" scope="col">Data di uscita</th>
                    <th class="text-primary" scope="col">Votazione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <th class="text-primary" scope="row">{{ $movie->id }}</th>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->nationality }}</td>
                        <td>{{ $movie->date }}</td>
                        <td class="text-warning">{{ $movie->vote }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
