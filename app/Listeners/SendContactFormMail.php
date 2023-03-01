<?php

namespace App\Listeners;

use App\Mail\ContactFormMail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendContactFormMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $name = $event->name;
        $email = $event->email;
        $topic = $event->topic;
        $description = $event->description;

        Mail::to(env('MAIL_TO_ADDRESS'))
            ->send(new ContactFormMail($name, $email, $topic, $description));
    }
}
