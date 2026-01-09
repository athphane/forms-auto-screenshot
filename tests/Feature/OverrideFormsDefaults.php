<?php

namespace Javaabu\Forms\Tests\Feature;

use Javaabu\Forms\Http\Middleware\OverrideFormsDefaults as Middleware;

class OverrideFormsDefaults extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
