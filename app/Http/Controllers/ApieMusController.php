<?php

namespace App\Http\Controllers;

use App\Enums\PageEnum;
use App\Traits\PageTextServices;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class ApieMusController extends Controller
{
    use PageTextServices;

    private object $pageText;

    public function __construct()
    {
        $this->pageText = $this->getPageTextByPageId(PageEnum::APIE_MUS);
    }

    /*
     * Apie mus page
     */
    public function index(): Factory|View|Application
    {
        return view('apie_mus.index')
            ->with([
                'pageText' => $this->decodePageText($this->pageText)
            ]);
    }
}
