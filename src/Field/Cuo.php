<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class Cuo implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['cuo'] ?? '';
    }
}