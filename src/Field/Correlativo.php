<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class Correlativo implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['correlativo'] ?? 'M1';
    }
}