<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateContactRequest;
use App\Services\ContactService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function __construct(private ContactService $service)
    {
    }

    public function index(): Factory|View|Application
    {
        return view('admin.contacts.index')
            ->with('contacts', $this->service->getContacts());
    }

    public function edit(int $id): Factory|View|Application
    {
        return view('admin.contacts.edit')
            ->with('contact', $this->service->getContactById($id));
    }

    public function update(int $id, UpdateContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        try {
            $this->service->updateContact($this->service->getContactById($id), $validated);

            return redirect(route('kontaktai.edit', $id))
                ->with('success', __('messages.successUpdateContact'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
