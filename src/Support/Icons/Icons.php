<?php

namespace Javaabu\Forms\Support\Icons;

abstract class Icons
{
    /**
     * @var array
     */
    protected static array $icons = [];

    /**
     * @var string
     */
    protected static string $icon_prefix = '';

    /**
     * Get the icons
     *
     * @return array
     */
    public static function getIcons(): array
    {
        return static::$icons;
    }

    /**
     * Get the icon prefix
     *
     * @return string
     */
    public static function getIconPrefix(): string
    {
        return static::$icon_prefix;
    }

    /**
     * Get the icon class
     *
     * @param $icon
     * @return string
     */
    public static function getIconClass($icon): string
    {
        $prefix = static::getIconPrefix();

        if ($prefix) {
            $icon = "$prefix $prefix-$icon";
        }

        return $icon;
    }

    /**
     * Get keys
     *
     * @return array
     */
    public static function getKeys(): array
    {
        return array_keys(static::getIcons());
    }
}
