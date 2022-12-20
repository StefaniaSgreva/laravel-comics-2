@extends('layouts.app')
@section('main_content')
    <section class="container">
       <form action="{{route('comics.store')}}">
        {{-- da mettere sempre in ogni form per sicurezza! affinchè Laravel si accerti che la chiamata al server venga dal nostro sito e non da terze parti --}}
             @csrf

            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control">

            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" rows="3" class="form-control"></textarea>

            <label for="thumb" class="form-label">Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control">

            <label for="price" class="form-label">Price $</label>
            <input type="text" name="price" id="price" class="form-control">

            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control">

            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" placeholder="yyyy/mm/dd" class="form-control">

            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control">

            <label for="type" class="form-label">Artist</label>
            <input type="text" name="artists" id="artists" class="form-control">

            <label for="type" class="form-label">Writer</label>
            <input type="text" name="writers" id="writers" class="form-control">

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
       </form>
    </section>
@endsection