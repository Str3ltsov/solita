<?php

namespace App\Http\Controllers;

use App\Enums\PageEnum;
use App\Traits\PageTextServices;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ApieMusController extends Controller
{
    use PageTextServices;

    private object $pageText;

    public function __construct()
    {
        $this->pageText = $this->getPageTextByPageId(PageEnum::APIE_MUS);
    }

    /*
     * Paslaugos page
     */
    public function index(): Factory|View|Application
    {
        return view('apie_mus.index')
            ->with([
                'pageText' => $this->decodePageText($this->pageText)
            ]);
    }
}
