<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;

class ImageUploadController
{
    public function uploadImg($file): ?string
    {
        if ($file === null) {
            return null;
        }
        $webpFileName = uniqid().'.'.'webp';
        $image = Image::make($file);
        $image->encode('webp', 80);
        $image->save(public_path('images/'.$webpFileName));
        return 'images/'.$webpFileName;
    }
}
