@extends('layouts.app')
@section('main_content')
   
    <section id="comic-infos">
        <div class="comic-jumbotron">
            <img src="{{$comic->image}}" alt="{{$comic->title}}">
        </div>
        <div class="blue_divider">
            <div class="comic-cover">
                <img src="{{$comic->image}}" alt="{{$comic->title}}">
            </div>
        </div>

        <div class="container pt-5 pb-3">
            <h1>{{$comic->title}}</h1>
            <div class="info-top d-flex justify-content-center align-items-center">
                <div class="description me-3">
                    <p>{{$comic->description}}</p>
                </div>
                <div class="advertisement">
                    <h4>Advertisement</h4>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="Advertisement">
                </div>
            </div>
        </div>

        <div class="info-bottom">
            <div class="container">
                <div class="row">
                    <div class="talent me-5 col">
                        <h2>Talent</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Art by:</span>
                            <span>{{$comic->artist}}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Written by:</span>
                            <span>{{$comic->writer}}</span>
                        </div>
                    </div>
                    <div class="specs col">
                        <h2>Specs</h2>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Series:</span>
                            <span>{{$comic->series}}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>U.S. Price:</span>
                            <span>{{$comic->price}}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>On Sale Date:</span>
                            <span>{{$comic->sale_date}}</span>
                        </div>
                    </div>
                </div>
                <a href="{{route('comics.edit', $comic->id)}}"><button class="my-btn">Edit</button></a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="my-btn">Delete</button>
                </form>          
            </div>
        </div>
    </section>
@endsection