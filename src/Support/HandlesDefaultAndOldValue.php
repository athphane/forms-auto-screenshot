<?php

namespace Javaabu\Forms\Support;

trait HandlesDefaultAndOldValue
{
    use HandlesBoundValues;

    protected function getValue(string $name, $bind = null, $default = null)
    {
        $inputName = static::convertBracketsToDots($name);

        $boundValue = $this->getBoundValue($bind, $inputName);

        $default = is_null($boundValue) ? $default : $boundValue;

        return old($inputName, $default);
    }

    protected function setValue(string $name, $bind = null, $default = null)
    {
        return $this->value = $this->getValue($name, $bind, $default);
    }
}
