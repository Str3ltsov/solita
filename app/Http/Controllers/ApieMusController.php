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

    /*
     * Apie mus edit page
     */
    public function edit(): Factory|View|Application
    {
        return view('apie_mus.edit')
            ->with([
                'pageText' => $this->decodePageText($this->pageText)
            ]);
    }

    /*
     * Updates and saves apie mus page texts
     */
    public function update(Request $request): RedirectResponse
    {
        try {
            $this->pageText->html_text = $request->html_text;
            $this->pageText->save();

            return redirect()
                ->route('apieMus')
                ->with('success', __('Sėkmingai išsaugota ir atnaujinta'));

        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
