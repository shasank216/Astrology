<?php

namespace App\Listeners;

use App\Repositories\GoogleCalendarRepository;

class HandleDeletedAppointmentFromGoogleCalendar
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        /** @var GoogleCalendarRepository $repo */
        $repo = \App::make(GoogleCalendarRepository::class);
        $events = $event->events;

        $repo->destroy($events);
    }
}
