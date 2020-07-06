@extends('layouts.main')

@section('content')
    <div class="container border-bottom border-dark py-4">
        <h4 class="text-uppercase text-warning font-weight-bold mt-2">Popular Movies</h4>

        <div class="row mt-2">

            @foreach ($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach


        </div>


    </div>

    <div class="container border-bottom border-dark py-4">
        <h4 class="text-uppercase text-warning font-weight-bold mt-2">Now Playing</h4>

        <div class="row mt-2">

            @foreach ($nowPlayingMovies as $movie)

                <x-movie-card :movie="$movie" :genres="$genres"/>

            @endforeach


        </div>


    </div>
@endsection
