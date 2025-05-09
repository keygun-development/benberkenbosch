<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function view()
    {
        return view('music', [
            'musics' => Music::latest('created_at')->get()
        ]);
    }

    public function getMusic()
    {
        return response()->json(Music::with(['artists'])->latest('created_at')->get());
    }

    public function dashboard()
    {
        return view('dashboard.music', [
            'musics' => Music::all()
        ]);
    }

    public function delete(Request $request)
    {
        $music = Music::where('id', $request->id);
        $music->delete();
        return redirect()->back();
    }

    public function detail(Request $request)
    {
        return view('dashboard.musicdetail', [
            'music' => Music::findOrFail($request->id)
        ]);
    }

    public function newPage(): Factory|View|Application
    {
        return view('dashboard.musicnew');
    }

    public function save(Request $request)
    {
        $request->validate([
            'thumbnail' => 'max:2048',
            'title' => 'required',
            'link' => 'required',
        ]);
        $music = Music::where('id', $request->id)->first();
        $this->extracted($request, $music);
        return redirect()->back();
    }

    public function create(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required',
            'title' => 'required',
            'link' => 'required',
        ]);
        $music = new Music();
        $this->extracted($request, $music);
        return redirect('/dashboard/music');
    }

    /**
     * @param Request $request
     * @param Music $music
     * @return void
     */
    public function extracted(Request $request, Music $music): void
    {
        if ($request->thumbnail) {
            $music->thumbnail = (new ImageUploadController)->uploadImg($request->thumbnail);
        }
        $music->title = $request->title;
        $music->link = $request->link;
        $music->save();
    }
}
