<?php

namespace App\Widgets;

use Statamic\Facades\Entry;
use Statamic\Widgets\Widget;

class GettingStartedWithPodcaster extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        $episodes = Entry::query()->where('collection', 'episodes')->count();

        return view('widgets.getting-started', compact('episodes'));
    }
}
