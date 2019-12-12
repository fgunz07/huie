<?php

namespace Fgunz07\Huie;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class HuieBroadcastServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Fgunz07\Huie\Broadcast\HuieBroadcast' => [
            'Fgunz07\Huie\Listener\HuieListen',
        ],
    ];
}