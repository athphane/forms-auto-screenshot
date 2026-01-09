<?php

namespace Javaabu\Forms\Views\Components\Tabs;

use Javaabu\Forms\Views\Components\Component;

class Pane extends Component
{
    protected string $view = 'tabs.pane';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $name,
        public string $labelledBy = '',
        public bool $active = false,
        string $framework = ''
    ) {
        parent::__construct($framework);
    }

    public function labelledBy(): string
    {
        return $this->labelledBy ?: $this->id() . '-tab';
    }
}
