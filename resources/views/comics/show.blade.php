@extends('layouts.main')

@section('title', $comic->series)

@section('main-content')
    <section id="product">
        <div class="band"></div>
        <figure class="thumb">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="thumb-img">
        </figure>
        <div class="container w-75">
            <div class="row">
                <div class="col-8">
                    <h2>{{$comic->title}}</h2>
                    <div class="price-box">
                        <div class="pb-left">
                            <span>
                                U.S. Price: 
                                <span class="text-white">
                                    {{$comic->price}}
                                </span>
                            </span>
                            <span>
                                AVAILABLE
                            </span>
                        </div>
                        <div class="pb-right text-white d-flex justify-content-center align-items-center gap-2">
                            Check availability <i class="fa-solid fa-sort-down"></i>
                        </div>
                    </div>

                    <p>
                        {{ $comic->description}}
                    </p>

                </div>

                <div class="col-4">
                    <span class="adv-text">ADVERTISEMENT</span>
                    <figure>
                        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Talent</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Art by:</th>
                                <td>
                                    <p>
                                        {{ $comic->artists }}.
                                    </p> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Written by:</th>
                                <td>
                                    <p>
                                        {{ $comic->writers }}.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Specs</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Series:</th>
                                <td>
                                    {{$comic->series}} 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">U.S. Price:</th>
                                <td class="text-black">
                                    {{$comic->price}}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">On sale date:</th>
                                <td class="text-black">
                                    {{$comic->sale_date}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
