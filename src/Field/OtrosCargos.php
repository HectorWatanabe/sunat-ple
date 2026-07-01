<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;
use SunatPle\Common\Formatter;

class OtrosCargos implements FieldInterface
{
    public static function make(array $record): string
    {
        $value = $record['otros_cargos'] ?? null;

        if ($value === null || $value === '') {
            return '';
        }

        return Formatter::number($value);
    }
}