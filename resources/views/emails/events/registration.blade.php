<x-mail::message>

    <x-mail::panel>
    ¡Hola, {{ explode(' ', $user->name)[0] }}!
        Nos alegra informarte que te has inscrito exitosamente. Tu lugar está reservado al evento **{{ $event->title }}** Aquí tienes los detalles completos para que te organices:

        Fecha de inicio: {{ $event->start_time->locale('es')->isoFormat('dddd D [de] MMMM, YYYY') }}
        Horario: {{ $event->start_time->format('h:i A') }} - {{ $event->end_time->format('h:i A') }}
        Tipo de evento: {{ ucfirst($event->type) }}
        @if($event->capacity)
            🎟️ Estado: Confirmado (Cupo asegurado)
        @endif



    Si por alguna razón no puedes asistir, te pedimos **cancelar tu registro** desde la plataforma para liberar tu lugar a otro compañero.

    Gracias por participar.

    Saludos cordiales,
    **Atte. CAFINED Lab**

    </x-mail::panel>
</x-mail::message>