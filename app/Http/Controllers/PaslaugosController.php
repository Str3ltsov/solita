<?php

namespace App\Http\Controllers;

use App\Enums\PageEnum;
use App\Traits\PageTextServices;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PaslaugosController extends Controller
{
    use PageTextServices;

    private object $pageText;

    public function __construct()
    {
        $this->pageText = $this->getPageTextByPageId(PageEnum::PASLAUGOS);
    }

    /*
     * Paslaugos page
     */
    public function index(): Factory|View|Application
    {
        return view('paslaugos.index')
            ->with([
                'pageText' => $this->decodePageText($this->pageText)
            ]);
    }

    /*
     * Paslaugos edit page
     */
    public function edit(): Factory|View|Application
    {
        return view('paslaugos.edit')
            ->with([
                'pageText' => $this->decodePageText($this->pageText)
            ]);
    }
}
