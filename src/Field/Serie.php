<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class Serie implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['serie'] ?? '';
    }
}