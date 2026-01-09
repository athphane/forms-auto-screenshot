<?php

namespace Javaabu\Forms\Views\Components\Tabs;

use Javaabu\Forms\Views\Components\Component;

class NavItem extends Component
{
    protected string $view = 'tabs.nav-item';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $title,
        public string $name = '',
        public string $target = '',
        public string $url = '#',
        public bool $active = false,
        public bool $disabled = false,
        public bool $isTab = false,
        string $framework = ''
    ) {
        parent::__construct($framework);
    }
}
