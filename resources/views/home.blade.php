@extends('layout.main')

@section('title', 'Home')

@section('content')
    <section id="movies" class="container p-3">
        @forelse ($movies as $movie)
            <div class="card">
                <h4 class="card-title">Titolo</h4>
                <h5 class="card-title-original">titolo originale</h5>
                <p class="card-national">nazionalità</p>
                <p class="card-date">data uscita</p>
                <p class="card-vote">voto</p>
            </div>
        @empty
            <h3>Non abbiamo Film a disposizione</h3>
        @endforelse
    </section>
@endsection