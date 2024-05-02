<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function view(): Factory|View|Application
    {
        return view('links');
    }
}
