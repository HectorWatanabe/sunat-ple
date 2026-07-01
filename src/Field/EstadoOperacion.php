<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class EstadoOperacion implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['estado_operacion'] ?? '1';
    }
}