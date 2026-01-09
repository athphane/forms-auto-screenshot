<?php

namespace Javaabu\Forms\Tests\TestSupport\Models;

use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Objects\Polygon;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class City extends Model
{
    use HasSpatial;

    protected $casts = [
        'coordinates' => Point::class,
        'boundary' => Polygon::class,
    ];

    public function getCustomLatAttribute()
    {
        return $this->coordinates?->latitude;
    }

    public function getCustomLngAttribute()
    {
        return $this->coordinates?->longitude;
    }

    public function getCustomRadiusAttribute()
    {
        return $this->radius;
    }

    public function getCustomBoundaryAttribute()
    {
        return $this->boundary;
    }
}
