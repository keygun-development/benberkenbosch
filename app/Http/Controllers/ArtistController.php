<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function dashboard() {
        return view('dashboard.artists', [
            'artists' => Artist::all(),
        ]);
    }

    public function newArtist() {
        return view('dashboard.artistnew');
    }

    public function detail(Request $request) {
        return view('dashboard.artistdetail', [
            'artist' => Artist::findOrFail($request->id),
        ]);
    }

    public function delete(Request $request) {
        $artist = Artist::where('id', $request->id);
        $artist->delete();
        return redirect()->back();
    }

    public function save(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        $artist = Artist::where('id', $request->id)->first();
        $this->extracted($request, $artist);
        $artist->save();

        return redirect()->route('dashboard.artists');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        $artist = new Artist();
        $this->extracted($request, $artist);
        $artist->save();

        return redirect()->route('dashboard.artists');
    }

    private function extracted(Request $request, Artist $artist) {
        $artist->name = $request->name;
    }
}
