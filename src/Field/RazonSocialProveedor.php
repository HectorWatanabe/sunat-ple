<?php

namespace SunatPle\Field;

use SunatPle\Contracts\FieldInterface;

class RazonSocialProveedor implements FieldInterface
{
    public static function make(array $record): string
    {
        return $record['razon_social_proveedor'] ?? '';
    }
}