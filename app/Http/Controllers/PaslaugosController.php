<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Traits\PageTextServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PaslaugosController extends Controller
{
    use PageTextServices;

    /*
     * Paslaugos page
     */
    public function index(): Factory|View|Application
    {
        $pageTexts = $this->getPageTextsByPageId(Page::PASLAUGOS);

        return view('paslaugos.index')
            ->with([
                'pageTexts' => $this->decodePageTexts($pageTexts)
            ]);
    }
}
