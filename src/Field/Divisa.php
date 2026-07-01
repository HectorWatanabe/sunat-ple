<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class Divisa implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['divisa'] ?? 'PEN';
    }
}