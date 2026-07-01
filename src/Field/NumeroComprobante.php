<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class NumeroComprobante implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['numero_comprobante'] ?? '';
    }
}