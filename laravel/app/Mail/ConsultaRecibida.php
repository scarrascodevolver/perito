<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConsultaRecibida extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $datos) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nueva consulta web: '.$this->datos['nombre'].' ('.($this->datos['sede'] ?? 'sin sede').')',
            replyTo: [$this->datos['email']],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.consulta');
    }
}
