<?php

namespace SunatPle\Field;

class TipoCambio
{
    public static function make(array $record): string
    {
        $value = $record['tipo_cambio'] ?? null;

        if ($value === null || $value === '') {
            return '';
        }

        return number_format((float)$value, 3, '.', '');
    }
}