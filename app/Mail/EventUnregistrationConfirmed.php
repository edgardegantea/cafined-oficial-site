<?php

namespace App\Mail;

use App\Models\Event;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventUnregistrationConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Event $event, public User $user) {}

    public function build()
    {
        return $this->subject('Cancelación de Registro: ' . $this->event->title)
            ->markdown('emails.events.unregistration'); // Apunta a la vista
    }
}
