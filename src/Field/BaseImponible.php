<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class BaseImponible implements FieldInterface
{
    public static function make(array $record): string
    {
        $value = $record['base_imponible'] ?? null;

        if ($value === null || $value === '') {
            return '';
        }

        return number_format((float)$value, 2, '.', '');
    }
}