<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PubSubHubBub
    |--------------------------------------------------------------------------
    |
    | Podcast feeds are PULL system, relying on podcast directories to crawl
    | RSS feeds looking for updates. Google's PubHubHubbub helps get your
    | podcast update faster by letting you PUSH updates & new episodes.
    |
    | Read more here:
    |  - https://pubsubhubbub.appspot.com/
    |  - https://podnews.net/article/pubsubhubbub-for-podcasters
    */

    'enabled' => env('PODCASTER_PUBSUBHUBBUB_ENABLED', false),
];
