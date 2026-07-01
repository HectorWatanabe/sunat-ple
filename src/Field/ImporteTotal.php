<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;
use SunatPle\Common\Formatter;

class ImporteTotal implements FieldInterface
{
    public static function make(array $record): string
    {
        $value = $record['importe_total'] ?? null;

        if ($value === null || $value === '') {
            return '';
        }

        return Formatter::number($value);
    }
}