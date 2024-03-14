@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')
    <div class="container">
        <div class="w-100 text-center pt-4">
            <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi Fumetto</a>
        </div>
        <div class="row g-3 py-4">
            @foreach ($comics as $index => $comic)
                <div class="comic-card">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <h5>{{ $comic->title }}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
