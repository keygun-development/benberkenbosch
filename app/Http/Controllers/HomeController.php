<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\ContentHome;
use App\Models\FloatingImage;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class HomeController extends Controller
{
    public function view(): Factory|View|Application
    {
        return view('welcome', [
            'album' => Album::latest()->first(),
            'about' => ContentHome::first(),
            'images' => FloatingImage::all(),
        ]);
    }

    public function links(): Factory|View|Application
    {
        return view('links');
    }

    public function dashboard()
    {
        return view('dashboard.home', [
            'about' => ContentHome::first(),
        ]);
    }

    public function dashboardSave(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $content = ContentHome::where('id', $request->id)->first();

        $content->title = $request->title;
        $content->text = $request->text;
        $content->update();

        return redirect()->back();
    }
}
