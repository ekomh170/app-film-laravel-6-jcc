<?php

namespace App\Http\Controllers;

use App\Peran;
use App\Film;
use App\Cast;
use Illuminate\Http\Request;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = Peran::all();
        return view('peran_menu.index', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $film = Film::all();
        $cast = Cast::all();
        return view('peran_menu.create', \compact('film', 'cast'));
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
            'film_id' => 'required',
            'cast_id' => 'required',
            'nama' => 'required',
        ]);
        peran::create([
            "film_id" => $request["film_id"],
            "cast_id" => $request["cast_id"],
            "nama" => $request["nama"]
        ]);
        alert()->success('Berhasil Menambahkan Data peran', 'Data peran');
        return redirect('/peran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peran = peran::find($id);
        return view('peran_menu.show', compact('peran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peran = Peran::find($id);
        $film = Film::all();
        $cast = Cast::all();
        return view('peran_menu.edit', compact('peran', 'film', 'cast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
            'nama' => 'required',
        ]);

        $peran = peran::find($id);

        $peran->film_id = $request->film_id;
        $peran->cast_id = $request->cast_id;
        $peran->nama = $request->nama;
        $peran->update();

        alert()->success('Berhasil Mengubah Data Peran', 'Data peran');
        return redirect('/peran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        peran::find($id)->delete();
        alert()->success('Berhasil Menghapus Data peran', 'Data peran');
        return redirect('/peran');
    }
}