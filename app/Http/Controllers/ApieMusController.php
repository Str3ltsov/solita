<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class ApieMusController extends Controller
{
    /*
     * Apie mus page
     */
    public function index(): Factory|View|Application
    {
        return view('apie_mus.index');
    }
}
