<?php

namespace App\Traits;

use App\Models\ContactForm;

trait ContactFormServices
{
    /*
     * Gets contact forms.
     */
    public static function getContactForms(): object
    {
        return ContactForm::all();
    }

    /*
     * Gets specific contact form by id.
     */
    public static function getContactFormById(int $id): object
    {
        $contactForm = ContactForm::find($id);

        if (empty($contactForm)) {
            throw new \Error(__('Pranešimas nerastas'));
        }

        return $contactForm;
    }
}
