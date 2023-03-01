<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePageRequest;
use App\Traits\PageTextServices;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PuslapiaiController extends Controller
{
    use PageTextServices;

    /*
     * Pages main page
     */
    public function index(): Factory|View|Application
    {
        return view('puslapiai.index')
            ->with('pages', $this->getPageTexts());
    }

    /*
     * Pages edit page
     */
    public function edit(int $id): Factory|View|Application
    {
        return view('puslapiai.edit')
            ->with('page', $this->getPageTextById($id));
    }

    /*
     * Updates and saves page information
     */
    public function update(int $id, UpdatePageRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $page = $this->getPageTextById($id);

            $page->page->name = $validated['name'];
            $page->page->save();

            $page->html_text = $validated['html_text'];
            $page->save();

            return back()->with('success', __('Puslapis sėkmingai atnaujintas ir išsaugotas'));

        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
