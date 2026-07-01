<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class NumeroDocumentoModifica implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['numero_documento_modifica'] ?? '';
    }
}