<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = profile::where('user_id', Auth::user()->id)->first();
        return view('profile_menu.index', compact('profile'));
    }

    public function show($id)
    {
        $profile = profile::where('user_id', Auth::user()->id)->first();
        return view('profile_menu.show', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'umur' => 'required',
            'bio' => 'required',
            'alamat' => 'required',
        ]);
        $profile_data = [
            "umur" => $request->umur,
            "bio" => $request->bio,
            "alamat" => $request->alamat,
        ];

        Profile::whereId($id)->update($profile_data);

        alert()->success('Berhasil Ubah Data Profile', 'Data Profile');
        return redirect('/profile/show');
    }
}