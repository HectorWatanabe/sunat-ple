<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class NumeroDetraccion implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['numero_detraccion'] ?? '';
    }
}