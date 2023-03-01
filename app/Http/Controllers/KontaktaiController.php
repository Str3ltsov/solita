<?php

namespace App\Http\Controllers;

use App\Enums\PageEnum;
use App\Events\ContactFormSent;
use App\Http\Requests\CreateContactFormRequest;
use App\Models\ContactForm;
use App\Traits\ContactFormServices;
use App\Traits\PageTextServices;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KontaktaiController extends Controller
{
    use PageTextServices, ContactFormServices;

    private object $pageText;

    public function __construct()
    {
        $this->pageText = $this->getPageTextByPageId(PageEnum::KONTAKTAI);
    }

    /*
     * Kontaktai page
     */
    public function index(): Factory|View|Application
    {
        return view('kontaktai.index')
            ->with([
                'pageText' => $this->decodePageText($this->pageText)
            ]);
    }

    /*
     * Submits contact form
     */
    public function submitContactForm(CreateContactFormRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $this->createContactForm($validated);

            event(new ContactFormSent(
                $validated['name'],
                $validated['email'],
                $validated['topic'],
                    $validated['description'] ?? __('Nėra aprašymo')
            ));

            return back()->with('success', __('Forma sėkmingai pateikta'));
        }
        catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
