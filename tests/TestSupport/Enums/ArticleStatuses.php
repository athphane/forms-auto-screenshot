<?php

namespace Javaabu\Forms\Tests\TestSupport\Enums;

enum ArticleStatuses: string
{
    case Draft = 'draft';
    case Published = 'published';

    public function getColor(): string
    {
        return match ($this) {
            self::Draft => 'danger',
            self::Published => 'success'
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Published => 'Published'
        };
    }
}
