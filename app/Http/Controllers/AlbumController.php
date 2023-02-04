<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function view($id)
    {
        return view('albumdetail', [
            'album' => Album::findOrFail($id)
        ]);
    }

    public function newPage(): Factory|View|Application
    {
        return view('dashboard.albumnew');
    }

    public function dashboard()
    {
        return view('dashboard.album', [
            'albums' => Album::all()
        ]);
    }

    public function detail(Request $request)
    {
        return view('dashboard.albumdetail', [
            'album' => Album::findOrFail($request->id)
        ]);
    }

    public function delete(Request $request)
    {
        $album = Album::where('id', $request->id);
        $album->delete();
        return redirect()->back();
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'date' => 'required',
            'artwork' => 'required',
            'text' => 'required',
        ]);

        $album = Album::where('id', $request->id)->first();
        $this->extracted($request, $album);
        return redirect()->back();
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required|max:2048',
            'cover' => 'required|max:2048',
            'author' => 'required',
            'date' => 'required',
            'artwork' => 'required',
            'text' => 'required',
        ]);

        $album = new Album();
        $this->extracted($request, $album);
        return redirect('/dashboard/albums');
    }

    /**
     * @param Request $request
     * @param Album $album
     * @return void
     */
    public function extracted(Request $request, Album $album): void
    {
        $album->name = $request->name;
        if ($request->thumbnail) {
            $album->thumbnail = (new ImageUploadController)->uploadImg($request->thumbnail);
        }
        if ($request->cover) {
            $album->cover = (new ImageUploadController)->uploadImg($request->cover);
        }
        $album->author = $request->author;
        $album->publish_date = $request->date;
        $album->artwork = $request->artwork;
        $album->description = $request->text;
        $album->save();
    }
}
