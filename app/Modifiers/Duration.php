<?php

namespace App\Modifiers;

use Owenoj\LaravelGetId3\GetId3;
use Statamic\Modifiers\Modifier;

class Duration extends Modifier
{
    /**
     * Modify a value.
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        if (! $value) {
            return;
        }

        $track = new GetId3($value->resolvedPath());

        return $track->getPlaytime();
    }
}
