<?php

namespace App\Http\Controllers;

use App\Services\BlockService;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(private PageService $pService, private BlockService $bService)
    {
    }

    public function mainPage()
    {
        return view('main.index')
            ->with([
                'page' => $this->pService->getPageByRoute(''),
                'blocks' => $this->bService->getBlocks()
            ]);
    }

    public function otherPage(string $route)
    {
        $page = $this->pService->getPageByRoute($route);

        if (str_contains('es_projektai', $route))
            return view('other.eu_projects')
                ->with('page', $page);

        return view('other.index')
            ->with('page', $page);
    }
}
