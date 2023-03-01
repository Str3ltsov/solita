<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePageRequest;
use App\Traits\ContactFormServices;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PranesimaiController extends Controller
{
    use ContactFormServices;

    /*
     * Messages main page
     */
    public function index(): Factory|View|Application
    {
        return view('pranesimai.index')
            ->with('messages', $this->getContactForms());
    }
}
