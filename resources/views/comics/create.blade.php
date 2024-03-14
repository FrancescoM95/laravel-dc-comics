@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')
<div class="container py-4">

    {{-- VALIDAZIONE --}}
    @if ($errors->any())
        <div class="alert alert-danger mt-4 p-3">
            <h4>Some fields are invalid!</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="row g-4 justify-content-end">
            <div class="col-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Insert title" value="{{old('title', '')}}">
            </div>
            <div class="col-6">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert thumb" value="{{old('thumb', '')}}">
            </div>
            <div class="col-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Insert price" value="{{old('price', '')}}">
            </div>
            <div class="col-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Insert series" value="{{old('series', '')}}">
            </div>
            <div class="col-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insert sale_date" value="{{old('sale_date', '')}}">
            </div>
            <div class="col-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Insert type" value="{{old('type', '')}}">
            </div>
            <div class="col-6">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" placeholder="Insert artists" value="{{old('artists', '')}}">
            </div>
            <div class="col-6">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" placeholder="Insert writers" value="{{old('writers', '')}}">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert description">
                    {{old('description', '')}}
                </textarea>
            </div>
            <div class="col-2 d-flex gap-2">
                <button type="submit" class="btn btn-primary">Aggiungi</button>
                <button type="reset" class="btn btn-warning">Svuota</button>
            </div>
        </div>  
    </form>
   
</div>

@endsection
