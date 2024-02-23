<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use function PHPUnit\Framework\isNull;

class ApplicationCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('jeffrey@example.com', 'Jeffrey Way'),
            subject: 'Application created',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.application-created',
        );
    }

    public function attachments(): array
    {
        if (!is_null($this->application->file_url)) {
            return [
                Attachment::fromStorageDisk('public', $this->application->file_url)
            ];
        }

        return [];
    }
}
