<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class Periodo implements FieldInterface
{
    public static function make(array $record): string
    {
        $periodo = $record['periodo'] ?? null;

        if (!$periodo) {
            return '';
        }

        $parts = explode('-', $periodo);

        if (count($parts) !== 2) {
            return '';
        }

        return $parts[0] . $parts[1] . '00';
    }
}