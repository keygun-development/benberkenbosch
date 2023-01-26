<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class HomeController extends Controller
{
    public function view(): Factory|View|Application
    {
        return view('welcome', [
            'album' => Album::latest()->first()
        ]);
    }
}
