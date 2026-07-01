<?php

namespace SunatPle\Field;

class TipoComprobante
{
    public static function make(array $record): string
    {
        return $record['tipo_comprobante'] ?? '';
    }
}