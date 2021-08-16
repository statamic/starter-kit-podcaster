<?php

namespace App\Listeners;

use Statamic\Events\EntrySaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;

class PubSubHubbub
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EntrySaved $event)
    {
        if (app()->environment('production') && config('podcaster.pubsubhubbub.enabled')) {
            $response = Http::asForm()->post('https://pubsubhubbub.appspot.com', [
                'hub.mode' => 'publish',
                'hub.url' => route('feed')
            ]);
        }
    }
}
