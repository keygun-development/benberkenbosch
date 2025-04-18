<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function view()
    {
        return view('about', [
            'about' => About::first()
        ]);
    }

    public function dashboard()
    {
        return view('dashboard.about', [
            'about' => About::first()
        ]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);
        $content = About::where('id', $request->id)->first();

        $content->title = $request->title;
        $content->text = $request->text;
        $content->update();

        return redirect()->back();
    }

    public function getAbout()
    {
        // return a json response
        return response()->json(About::first());
    }
}
