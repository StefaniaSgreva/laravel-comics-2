@extends('layouts.app')
@section('main_content')
    <div class="jumbotron"></div>
    <section id="current-series" class="container text-center">
        <h2 class="section-titol">Current Series</h2>
        @if(session()->has('message'))
            <div class="alert alert-success mt-5 mb-3 w-75 mx-auto">
                {{session()->get('message')}}
            </div>
         @endif
        <div class="row pt-5 mb-2">
            @foreach ($comics as $comic)
                <div class="col-2 my-3">
                    <a href="{{route('comics.show',$comic->id)}}">
                        <div class="poster">
                            <img src="{{$comic->image}}" alt="{{$comic->title}}">
                        </div>
                        <h5 class="comic-title">{{$comic->title}}</h5>
                    </a>
                </div>
            @endforeach
        </div> 
        <button class="my-btn">Load More</button>
    </section>

    <section class="shop">
        <div class="container">
            <div class="digital-comics">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="Digital Comics">
                <span>Digital Comics</span>
            </div>
            <div class="merciandise">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="DC Merciandise">
                <span>DC Merciandise</span>
            </div>
            <div class="subscriptions">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="Subscriptions">
                <span>Subscriptions</span>
            </div>
            <div class="shop-locator">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="Shop Locator">
                <span>Comic Shop Locator</span>
            </div>
            <div class="power-visa">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="DC Power Visa">
                <span>DC Power Visa</span>
            </div>
        </div>
    </section>
@endsection