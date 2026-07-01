<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class EmptyField implements FieldInterface
{
    public static function make(array $record = []): string
    {
        return '';
    }
}