@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row gy-5 my-5 row-cols-md-3 justify-content-center">
        @forelse ($movies as $movie)
        <div class="col">
            <div class="card text-center p-2 h-100">
                <h3>{{$movie->title}}</h3>
                <div>{{$movie->original_title}}</div>
                <div>{{$movie->nationality}}</div>
                <div>{{$movie->date}}</div>
                <div>{{$movie->vote}}</div>
            </div>
        </div>
        @empty
        <div class="col">Non abbiamo trovato niente!</div>
        @endforelse
    </div>
</div>
@endsection