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
        if ($file->getSize() > 2 * 1024 * 1024) {
            $image = Image::make($file);
            $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $webpFileName = uniqid().'.'.'webp';
            $image->encode('webp', 80);
            $image->save(public_path('images/'.$webpFileName));
            return 'images/'.$webpFileName;
        }
        $webpFileName = uniqid().'.'.'webp';
        $image = Image::make($file);
        $image->encode('webp', 80);
        $image->save(public_path('images/'.$webpFileName));
        return 'images/'.$webpFileName;
    }
}
