<?php

namespace App\Http\Controllers;

use App\Cast;
use App\Film;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $cast = Cast::count();
        $film = Film::count();
        $genre = Genre::count();
        return view('dashboard', compact('cast', 'film', 'genre'));
    }
}