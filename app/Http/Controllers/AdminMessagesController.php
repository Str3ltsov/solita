<?php

namespace App\Http\Controllers;

use App\Services\ContactFormService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    public function __construct(private ContactFormService $service)
    {
    }

    public function index(): Factory|View|Application
    {
        return view('admin.messages.index')
            ->with('messages', $this->service->getContactForms());
    }

    public function destroy(int $id): RedirectResponse
    {
        try {
            $message = $this->service->getContactFormById($id);
            $message->delete();

            return back()->with('success', __('messages.successDeleteMessage'));
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
