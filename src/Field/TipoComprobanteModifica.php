<?php

namespace SunatPle\Field;

class TipoComprobanteModifica
{
    public static function make(array $record): string
    {
        return $record['tipo_comprobante_modifica'] ?? '';
    }
}