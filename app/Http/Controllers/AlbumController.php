<?php

namespace App\Http\Controllers;

use App\Models\Album;

class AlbumController extends Controller
{
    public function view($id)
    {
        return view('albumdetail', [
            'album' => Album::where('id', $id)->first()
        ]);
    }

    public function dashboard()
    {
        return view('dashboard.album');
    }
}
