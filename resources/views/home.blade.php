@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row gy-5 my-5 row-cols-md-3 justify-content-center">
        @forelse ($movies as $movie)
        <div class="col">
            <div class="card p-3 h-100">
                <h3>{{$movie->title}}</h3>
                <div>Original title:{{$movie->original_title}}</div>
                <div>Nationality:{{$movie->nationality}}</div>
                <div>Date:{{$movie->date}}</div>
                <div>Rating:{{$movie->vote}}</div>
            </div>
        </div>
        @empty
        <div class="col">Non abbiamo trovato niente!</div>
        @endforelse
    </div>
</div>
@endsection