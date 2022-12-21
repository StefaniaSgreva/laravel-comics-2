@extends('layouts.app')
@section('main_content')
    <section class="container">
        <h1 class="text-center mt-3">Edit: {{$comic->title}}</h1>
       <form action="{{route('comics.update', $comic->id)}}" method="POST">
        {{-- da mettere sempre in ogni form per sicurezza! affinchè Laravel si accerti che la chiamata al server venga dal nostro sito e non da terze parti --}}
             @csrf
             @method('PUT')

            <label for="title" class="form-label my-3">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{old('title', $comic->title)}}" required>

            <label for="description" class="form-label my-3">Description</label>
            <textarea type="text" name="description" id="description" rows="3" class="form-control">{{old('description', $comic->description)}}</textarea>

            <label for="thumb" class="form-label my-3">Image</label>
            <input type="text" name="image" id="image" class="form-control" value="{{old('image', $comic->image)}}">

            <label for="price" class="form-label my-3" required>Price $</label>
            <input type="text" name="price" id="price" class="form-control" value="{{old('price', $comic->price)}}">

            <label for="series" class="form-label my-3" required>Series</label>
            <input type="text" name="series" id="series" class="form-control" value="{{old('series', $comic->series)}}">

            <label for="sale_date" class="form-label my-3">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" placeholder="yyyy-mm-dd" class="form-control" value="{{old('sale_date', $comic->sale_date)}}">

            <label for="type" class="form-label my-3">Type</label>
            {{-- <input type="text" name="type" id="type" class="form-control"> --}}
            <select name="type" id="type" class="form-select" required>
                {{-- <option selected>Open this select menu</option> --}}
                <option value="graphicnovel" {{old('type', $comic->type == 'graphicnovel' ? 'selected' : '')}}>graphic novel</option>
                <option value="comicbook" {{old('type', $comic->type == 'comicbook' ? 'selected' : '')}}>comic book</option>
            </select>

            <label for="type" class="form-label my-3">Artist</label>
            <input type="text" name="artist" id="artist" class="form-control" value="{{old('artist', $comic->artist)}}" required>

            <label for="type" class="form-label my-3">Writer</label>
            <input type="text" name="writer" id="writer" class="form-control" value="{{old('writer', $comic->writer)}}" required>

            <button type="submit" class="btn btn-primary my-4">Edit</button>
       </form>
    </section>
@endsection