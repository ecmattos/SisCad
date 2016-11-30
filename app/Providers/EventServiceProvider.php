<?php

namespace SisCad\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'SisCad\Events\UserNewEvent' => 
        [
            'SisCad\Listeners\UserNewEmailEventListener',
            'SisCad\Listeners\UserNewEmailToAdminEventListener',
        ],

        'SisCad\Events\UserEnabledEvent' => 
        [
            'SisCad\Listeners\UserEnabledEmailEventListener',
        ],

        'SisCad\Events\UserDisabledEvent' => 
        [
            'SisCad\Listeners\UserDisabledEmailEventListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
