<?php

namespace App\Services;

use App\Models\ContactForm;
use App\Models\Contact;

class ContactService
{
    public final function getContacts(): object
    {
        return Contact::all();
    }

    public final function createContactForm(array $validated): void
    {
        ContactForm::firstOrCreate([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'topic' => $validated['topic'],
            'description' => $validated['description'] ?? NULL,
            'created_at' => now()
        ]);
    }
}