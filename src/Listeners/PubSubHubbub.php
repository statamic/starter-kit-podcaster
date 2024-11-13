<?php

namespace Statamic\Podcaster\Listeners;

use Illuminate\Support\Facades\Http;
use Statamic\Events\EntrySaved;

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
