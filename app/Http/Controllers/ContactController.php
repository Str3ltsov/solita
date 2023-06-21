<?php

namespace App\Http\Controllers;

use App\Events\ContactFormSent;
use App\Http\Requests\CreateContactFormRequest;
use App\Services\ContactService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Exception;

class ContactController extends Controller
{
    public function __construct(private ContactService $service)
    {
    }

    public function contacts(): Factory|View|Application
    {
        return view('contacts.index')
            ->with('contacts', $this->service->getContacts());
    }

    public function submitContactForm(CreateContactFormRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $this->service->createContactForm($validated);

            event(new ContactFormSent(
                $validated['name'],
                $validated['email'],
                $validated['topic'],
                $validated['description'] ?? __('messages.noDescription')
            ));

            return back()->with('success', __('messages.successContactForm'));
        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
