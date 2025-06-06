<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings.
     */
    protected $listen = [
        // ExampleEvent::class => [
        //     ExampleListener::class,
        // ],
    ];

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }

    /**
     * Get the directories to scan for events.
     */
    public function discoverEventsWithin(): array
    {
        return [
            app_path('Listeners'),
        ];
    }
}
