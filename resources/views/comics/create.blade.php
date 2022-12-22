@extends('layouts.app')
@section('main_content')
    <section class="container">
        <h1 class="text-center mt-3">Add</h1>
       <form action="{{route('comics.store')}}" method="POST">
        {{-- da mettere sempre in ogni form per sicurezza! affinchè Laravel si accerti che la chiamata al server venga dal nostro sito e non da terze parti --}}
             @csrf

            <label for="title" class="form-label my-3">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
            @error('title') 
                 <div class="invalid-feedback ">{{$message}}</div>{{--message viene da lang dove sono scritti tutti i msg in eng di error --}}
            @enderror

            <label for="description" class="form-label my-3">Description</label>
            <textarea type="text" name="description" id="description" rows="3" class="form-control"></textarea>

            <label for="thumb" class="form-label my-3">Image</label>
            <input type="text" name="image" id="image" class="form-control">

            <label for="price" class="form-label my-3" required>Price $</label>
            <input type="text" name="price" id="price" class="form-control">

            <label for="series" class="form-label my-3" required>Series</label>
            <input type="text" name="series" id="series" class="form-control">

            <label for="sale_date" class="form-label my-3">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" placeholder="yyyy-mm-dd" class="form-control">

            <label for="type" class="form-label my-3">Type</label>
            {{-- <input type="text" name="type" id="type" class="form-control"> --}}
            <select name="type" id="type" class="form-select" aria-label="type">
                <option selected>Open this select menu</option>
                <option value="graphic novel">graphic novel</option>
                <option value="comic book">comic book</option>
            </select>

            <label for="type" class="form-label my-3">Artist</label>
            <input type="text" name="artist" id="artist" class="form-control" required>

            <label for="type" class="form-label my-3">Writer</label>
            <input type="text" name="writer" id="writer" class="form-control" required>

            <button type="submit" class="btn btn-primary my-4">Submit</button>
       </form>
    </section>
@endsection