<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;
use SunatPle\Common\Formatter;

class FechaDetraccion implements FieldInterface
{
    public static function make(array $record): string
    {
        return Formatter::date($record['fecha_detraccion'] ?? null);
    }
}
