<?php

namespace Javaabu\Forms\Views\Components;

class Status extends Component
{
    protected string $view = 'status';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label = '',
        public string $color = 'primary',
        string $framework = ''
    ) {
        parent::__construct($framework);
    }
}
