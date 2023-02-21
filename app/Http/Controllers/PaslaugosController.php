<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PaslaugosController extends Controller
{
    /*
     * Paslaygos page
     */
    public function index(): Factory|View|Application
    {
        return view('paslaugos.index');
    }
}
