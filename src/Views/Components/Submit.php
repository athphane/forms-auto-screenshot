<?php

namespace Javaabu\Forms\Views\Components;

class Submit extends Button
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $color = 'primary',
        string $framework = ''
    ) {
        parent::__construct('submit', $color, true, $framework);
    }
}
