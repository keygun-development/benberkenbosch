<?php

namespace App\Http\Controllers;

use App\Models\FloatingImage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.images', [
            'images' => FloatingImage::all()
        ]);
    }

    public function delete(Request $request)
    {
        $image = FloatingImage::where('id', $request->id);
        $image->delete();
        return redirect()->back();
    }

    public function detail(Request $request)
    {
        return view('dashboard.imagedetail', [
            'image' => FloatingImage::findOrFail($request->id)
        ]);
    }

    public function newPage() {
        return view('dashboard.imagenew');
    }

    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'position' => 'required|integer|between:1,8',
        ]);
        $image = new FloatingImage();
        $this->extracted($request, $image);
        return redirect('/dashboard/images');
    }

    public function save(Request $request)
    {
        $request->validate([
            'image' => 'max:2048',
            'position' => 'required|integer|between:1,8',
        ]);
        $image = FloatingImage::where('id', $request->id)->first();
        $this->extracted($request, $image);
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param FloatingImage $image
     * @return void
     */
    public function extracted(Request $request, FloatingImage $image): void
    {
        if ($request->image) {
            $image->image = (new ImageUploadController)->uploadImg($request->image);
        }
        $image->position = $request->position;
        $image->save();
    }
}
