<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $formData = $request->all();
        // dd($formData);
        $newComic = new Comic();

        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->image = $formData['image'];
        $newComic->price = $formData['price'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->type = $formData['type'];
        $newComic->artist = $formData['artist'];
        $newComic->writer = $formData['writer'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
        // return redirect()->route('comics.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Comic $comic) //$id se uso una delle due opzioni commentate sotto

    {
        // $comic = Comic::find($id);
        // if (empty($comic)) {
        //     abort(404);
        // }
        // $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Comic $comic) //$id

    {
        // $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    
    */
    public function update(Request $request, $id)
    {
        $comic = Comic::find($id);

        $formData = $request->all();

        $comic->title = $formData['title'];
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->image = $formData['image'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->sale_date = $formData['sale_date'];
        $comic->type = $formData['type'];
        $comic->artist = $formData['artist'];
        $comic->writer = $formData['writer'];

        $comic->update();

        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message', "Il tuo prodotto con id: {$comic->id} è stato cancellato con successo!"); //ricordare apici doppi per interpolazione di PHP!
    }
}