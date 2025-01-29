<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // 'App\Events\EventName' => [
        //     'App\Listeners\ListenerName',
        // ],
    ];

    public function boot()
    {
        parent::boot();

        // イベントリスナーをここに登録することができます
    }
}