<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class SerieDocumentoModifica implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['serie_documento_modifica'] ?? '';
    }
}