<?php

namespace App\Http\Controllers;

use App\Events\ContactFormSent;
use App\Http\Requests\CreateContactFormRequest;
use App\Models\ContactForm;

use App\Models\Page;
use App\Traits\PageTextServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KontaktaiController extends Controller
{
    use PageTextServices;

    /*
     * Kontaktai page
     */
    public function index(): Factory|View|Application
    {
        $pageTexts = $this->getPageTextsByPageId(Page::KONTAKTAI);

        return view('kontaktai.index')
            ->with([
                'pageTexts' => $this->decodePageTexts($pageTexts)
            ]);
    }

    /*
     * Creates contact form
     */
    private function createContactForm(array $validated): void
    {
        ContactForm::firstOrCreate([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'topic' => $validated['topic'],
            'description' => $validated['description'] ?? NULL,
            'created_at' => now()
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
                $validated['name'], $validated['email'], $validated['topic'], $validated['description']
            ));

            return back()->with('success', __('Forma sėkmingai pateikta'));
        }
        catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
