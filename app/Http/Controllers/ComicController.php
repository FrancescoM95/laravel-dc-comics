<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        $data = $request->all();

        $comic = new Comic();

        $comic->fill($data);

        $comic->save();

        return to_route('comics.show', $comic->id)
            ->with('type', 'success')
            ->with('message', "$comic->title successfully created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        $data = $request->all();

        $comic->update($data);

        return to_route('comics.show', $comic->id)
            ->with('type', 'success')
            ->with('message', "$comic->title successfully edited.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')
            ->with('type', 'success')
            ->with('message', "$comic->title successfully deleted.");
    }



    // # SOFT DELETE

    public function trash()
    {
        $comics = Comic::onlyTrashed()->get();

        return view('comics.trash', compact('comics'));
    }

    public function restore(Comic $comic)
    {
        $comic->restore();

        return to_route('comics.index')
            ->with('type', 'info')
            ->with('message', "$comic->title has been successfully restored!");
    }

    public function drop(Comic $comic)
    {
        $comic->forceDelete();

        return to_route('comics.index')
            ->with('type', 'warning')
            ->with('message', "$comic->title has been permanently deleted!");
    }
};
