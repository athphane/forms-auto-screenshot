<?php

namespace Javaabu\Forms\Views\Components;

use Javaabu\Forms\Support\HandlesBoundValues;

class Infolist extends Card
{
    use HandlesBoundValues;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $title = '',
        $model = null,
        string $framework = ''
    ) {
        parent::__construct($title, $framework);

        $this->bindModel($model);
    }
}
