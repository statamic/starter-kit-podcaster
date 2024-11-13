<?php

Route::statamic('feed.xml', 'podcaster::feed', ['content_type' => 'text/xml'])->name('feed');
