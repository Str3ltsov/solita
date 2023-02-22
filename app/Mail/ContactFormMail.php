<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private string $email;
    private string $topic;
    private string|null $description;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email, string $topic, string|null $description)
    {
        $this->name = $name;
        $this->email = $email;
        $this->topic = $topic;
        $this->description = $description;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('Naujas pranešimas iš solita'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.send_contact_form',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'topic' => $this->topic,
                'description' => $this->description
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
