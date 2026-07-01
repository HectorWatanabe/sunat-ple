<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class Exonerado implements FieldInterface
{
    public static function make(array $record): string
    {
        $value = $record['exonerado'] ?? null;

        if ($value === null || $value === '') {
            return '';
        }

        return number_format((float)$value, 2, '.', '');
    }
}