<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KontaktaiController extends Controller
{
    /*
     * Kontaktai page
     */
    public function index(): Factory|View|Application
    {
        return view('kontaktai.index');
    }
}
