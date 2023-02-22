<?php

namespace App\Http\Controllers;

use App\Enums\PageEnum;
use App\Traits\PageTextServices;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class ApieMusController extends Controller
{
    use PageTextServices;

    /*
     * Apie mus page
     */
    public function index(): Factory|View|Application
    {
        $pageTexts = $this->getPageTextsByPageId(PageEnum::APIE_MUS);

        return view('apie_mus.index')
            ->with([
                'pageTexts' => $this->decodePageTexts($pageTexts)
            ]);
    }
}
