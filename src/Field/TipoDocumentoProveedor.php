<?php

namespace SunatPle\Field;

class TipoDocumentoProveedor
{
    public static function make(array $record): string
    {
        return $record['tipo_documento_proveedor'] ?? '';
    }
}