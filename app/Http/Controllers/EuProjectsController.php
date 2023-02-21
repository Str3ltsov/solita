<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EuProjectsController extends Controller
{
    /*
     * Eu projects page
     */
    public function index(): Factory|View|Application
    {
        return view('eu_projects.index');
    }
}
