<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Traits\PageTextServices;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EsProjektaiController extends Controller
{
    use PageTextServices;

    /*
     * Eu projects page
     */
    public function index(): Factory|View|Application
    {
        $pageTexts = $this->getPageTextsByPageId(Page::ES_PROJEKTAI);

        return view('es_projektai.index')
            ->with([
                'pageTexts' => $this->decodePageTexts($pageTexts)
            ]);
    }
}
