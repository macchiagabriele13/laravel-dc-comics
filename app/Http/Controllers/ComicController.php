<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicsRequest;
use App\Http\Requests\UpdateComicsRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicsRequest $request)
    {
        $comics = new Comic();
        $comics->title = $request['title'];
        $comics->description = $request['description'];
        $comics->thumb = $request['thumb'];
        $comics->price = $request['price'];
        $comics->series = $request['series'];
        $comics->sale_date = $request['sale_date'];
        $comics->type = $request['type'];
        $comics->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicsRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicsRequest $request, Comic $comic)
    {
        $data = [
            'title' => $request['title'],
            'description' => $request['description'],
            'thumb' => $request['thumb'],
            'price' => $request['price'],
            'series' => $request['series'],
            'sale_date' => $request['sale_date'],
            'type' => $request['type'],
        ];

        $comic->update($data);

        return to_route('comics.index')->with('message', "$comic->title update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('message', "$comic->title delete successfully");
    }
}
