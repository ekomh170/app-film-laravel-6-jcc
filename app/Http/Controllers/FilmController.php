<?php

namespace App\Http\Controllers;

use App\Film;
use App\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::all();
        return view('film_menu.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('film_menu.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|max:3000',
            'genre_id' => 'required',
        ]);

        $gambar = $request->poster;
        $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();

        Film::create([
            "judul" => $request["judul"],
            "ringkasan" => $request["ringkasan"],
            "tahun" => $request["tahun"],
            "poster" => $new_gambar,
            "genre_id" => $request["genre_id"],
        ]);

        $gambar->move('img/film/', $new_gambar);
        alert()->success('Berhasil Menambahkan Data Genre', 'Data Genre');
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id);
        return view('film_menu.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $genre = Genre::all();
        $film = Film::find($id);
        return view('film_menu.edit', compact('film', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'mimes:jpeg,jpg,png',
            'genre_id' => 'required',
        ]);

        $film = Film::find($id);

        if ($request->has('poster')) {
            $path = 'img/film/';
            \Illuminate\Support\Facades\File::delete($path . $film->poster);
            $gambar = $request->poster;
            $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();
            $gambar->move($path, $new_gambar);
            $film_data = [
                'judul' => $request->judul,
                'ringkasan' => $request->ringkasan,
                'tahun' => $request->tahun,
                'poster' => $new_gambar,
                'genre_id' => $request->genre_id,
            ];
        } else {
            $film_data = [
                'judul' => $request->judul,
                'ringkasan' => $request->ringkasan,
                'tahun' => $request->tahun,
                'genre_id' => $request->genre_id,
            ];
        }

        $film->update($film_data);

        alert()->success('Berhasil Mengubah Data film', 'Data film');
        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);
        $path = 'img/film/';
        \Illuminate\Support\Facades\File::delete($path . $film->poster);
        $film->delete();
        alert()->success('Berhasil Menghapus Data Cast', 'Data Cast');
        return redirect('/film');
    }
}