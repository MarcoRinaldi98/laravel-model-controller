@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <div class="container-lg">
        <h1 class="text-primary py-3">Elenco dei film</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card col-3 offset-1 text-center my-2">
                    <div class="card-body">
                        <h5 class="card-title text-info">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2">{{ $movie->original_title }}</h6>
                        <span class="card-text pe-3">{{ $movie->date }}</span>
                        <span class="card-text"> {{ $movie->nationality }} </span>
                        <p class="card-text">Votazione: <span class="text-warning fs-4 ps-2">{{ $movie->vote }}</span></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
