<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;
use SunatPle\Common\Formatter;

class Igv implements FieldInterface
{
    public static function make(array $record): string
    {
        $value = $record['igv'] ?? null;

        if ($value === null || $value === '') {
            return '';
        }

        return Formatter::number($value);
    }
}