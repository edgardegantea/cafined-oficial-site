<?php

namespace App\Mail;

use App\Models\Event;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventRegistrationConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Event $event, public User $user) {}

    public function build()
    {
        return $this->subject('Confirmación de Inscripción: ' . $this->event->title)
            ->markdown('emails.events.registration'); // Apunta a la vista
    }
}
