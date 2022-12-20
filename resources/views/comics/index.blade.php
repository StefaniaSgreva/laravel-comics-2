@extends('layouts.app')
@section('main_content')
    <section class="container">
        <ul>
            @foreach ($comics as $comic)
            <a href="{{route('comics.show',$comic->id)}}">
                <li>{{$comic->title}}</li>
            </a>
            @endforeach
        </ul>
    </section>
@endsection