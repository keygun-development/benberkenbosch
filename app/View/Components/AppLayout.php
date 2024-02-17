<?php

namespace App\View\Components;

use App\Models\Album;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app', ['hero' => $this->getHeroImage()]);
    }

    public function getHeroImage(): string
    {
        if (request()->is('/')) {
            return Album::latest()->first()->thumbnail;
        }

        // Check if the current route is an album
        if (request()->is('albums/*')) {
            $albumId = request()->segment(2);
            $album = Album::findOrFail($albumId);
            return $album->thumbnail;
        }

        return '';
    }
}
