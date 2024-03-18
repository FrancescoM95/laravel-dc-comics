@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')
    <div class="container py-5">
        <div class="w-100 d-flex justify-content-center gap-2">
            <a href="{{route('comics.create')}}" class="btn btn-primary">Add comic</a>
            <a href="{{route('comics.index')}}" class="btn btn-success">Comics list</a>
        </div>
        <div class="row g-3 py-4">
            @if (!count($comics))
                <div class="col text-center text-white">
                    <h2>No comics deleted.</h2>
                </div>
            @endif
            @foreach ($comics as $index => $comic)
                <div class="comic-card">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <h5>{{ $comic->title }}</h5>
                    </a>
                    <div class="overlay">
                        <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center gap-2">
                            <form action="{{ route('comics.drop', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                            <form action="{{ route('comics.restore', $comic->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Restore</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
