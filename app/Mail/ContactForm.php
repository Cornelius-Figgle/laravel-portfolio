<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(
        public string $name,
        public string $email,
        public string $messageText
    ) {}

    // From & subject specification 
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Laravel Portfolio: new message from ' . $this->name
        );
    }

    // Email body specification 
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact-form'
        );
    }

}
