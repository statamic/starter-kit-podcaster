<?php

namespace Statamic\Podcaster;

use Livewire\Livewire;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'podcaster';

    protected $publishables = [
        __DIR__.'/../resources/img' => 'img',
    ];

    public function bootAddon()
    {
        Livewire::forceAssetInjection();
    }
}
