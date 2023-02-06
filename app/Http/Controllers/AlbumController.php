<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\AlbumMeta;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function view($id)
    {
        return view('albumdetail', [
            'album' => Album::with('albumMetas')->findOrFail($id)
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
            'album' => Album::with('albumMetas')->findOrFail($request->id)
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
            'text' => 'required',
            'thumbnail' => 'max:2048',
            'cover' => 'max:2048',
        ]);

        $album = Album::where('id', $request->id)->first();
        $this->extracted($request, $album);
        $album->save();
        $existingAlbumMetas = AlbumMeta::where('album_id', $request->id)->get();
        $existingAlbumMetasCount = count($existingAlbumMetas);

        for ($i = 0; $i < $request->repeats; $i++) {
            if ($i < $existingAlbumMetasCount) {
                $album_meta = $existingAlbumMetas[$i];
            } else {
                $album_meta = new AlbumMeta();
                $album_meta->album_id = $request->id;
            }

            $album_meta->icon = $request->input("svg" . ($i + 1)) ?? '';
            $album_meta->link = $request->input("url" . ($i + 1)) ?? '';
            $album_meta->save();
        }

        for ($i = $request->repeats; $i < $existingAlbumMetasCount; $i++) {
            $album_meta = $existingAlbumMetas[$i];
            $album_meta->delete();
        }
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
            'text' => 'required',
        ]);

        $album = new Album();
        $this->extracted($request, $album);
        $album->save();
        $album_id = $album->id;
        for ($i = 0; $i < $request->repeats; $i++) {
            $album_meta = new AlbumMeta();
            $album_meta->album_id = $album_id;
            $album_meta->icon = $request->input("svg" . $i + 1) ?? '';
            $album_meta->link = $request->input("url" . $i + 1) ?? '';
            $album_meta->save();
        }
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
        $album->artwork = $request->thumbnail_art ?? '';
        $album->cover_art = $request->cover_art ?? '';
        $album->description = $request->text;
        $album->buttontext = $request->buttontext;
        $album->buttonlink = $request->buttonlink;
    }
}
