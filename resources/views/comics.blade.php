@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')
<div class="container">
    <div class="row g-3 py-5">
        @foreach ($comics as $index => $comic)
       
            <div class="comic-card">
                <a href="{{ route('product', ['index' => $index]) }}">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <h5>{{ $comic['title'] }}</h5>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
