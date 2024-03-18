@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')
    <div class="container">
        <div class="w-100 text-center pt-4">
            <a href="{{route('comics.create')}}" class="btn btn-primary">Add comic</a>
        </div>
        <div class="row g-3 py-5">
            @if (!count($comics))
                <div class="col text-center text-white">
                    <h2>No comics deleted.</h2>
                </div>
            @endif
            @foreach ($comics as $index => $comic)
                <div class="comic-card mb-5">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <h5>{{ $comic->title }}</h5>
                    </a>
                    <div class="d-flex gap-2 justify-content-center">
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
            @endforeach
        </div>
    </div>
@endsection
