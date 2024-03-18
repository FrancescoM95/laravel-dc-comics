@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')
    <div class="container pt-5">
        @session('message')
            <div class="alert alert-{{ session('type', 'info') }}">
                <p>{{ $value }}</p>
            </div>
        @endsession

        <div class="w-100 text-center pt-2">
            <a href="{{route('comics.create')}}" class="btn btn-primary me-2">Add comic</a>
            <a href="{{route('comics.trash')}}" class="btn btn-danger">View deleted</a>
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
