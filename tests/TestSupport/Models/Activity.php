<?php

namespace Javaabu\Forms\Tests\TestSupport\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $casts = [
        'date_a' => 'datetime',
        'date_b' => 'datetime',
        'date_c' => 'datetime',
        'date_d' => 'datetime',
        'date_e' => 'datetime',
    ];

    protected static function newFactory(): ActivityFactory
    {
        return ActivityFactory::new();
    }
}
