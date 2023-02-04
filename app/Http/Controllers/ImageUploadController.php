<?php

namespace App\Http\Controllers;

class ImageUploadController
{
    public function uploadImg($file): ?string
    {
        if ($file === null) {
            return null;
        }
        $image = $file->move(public_path('images'), $file->getClientOriginalName());
        return "images/".basename($image);
    }
}
