@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row gy-5 my-5 row-cols-md-3">
        @forelse ($movies as $movie)
        <div class="col">
            <div class="card h-100">
                <h3>{{$movie->title}}</h3>
            </div>
        </div>
        @empty
        <div class="col">Non abbiamo trovato niente!</div>
        @endforelse
    </div>
</div>
@endsection