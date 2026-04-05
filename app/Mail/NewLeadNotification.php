<?php

namespace App\Mail;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewLeadNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Lead $lead)
    {
    }

    public function envelope(): Envelope
    {
        $type = ucfirst($this->lead->form_type);
        return new Envelope(
            subject: "New {$type} Lead: {$this->lead->first_name} {$this->lead->last_name}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.new-lead-notification',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
