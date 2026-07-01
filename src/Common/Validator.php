<?php

namespace SunatPle\Common;

use SunatPle\Exceptions\ValidationException;

class Validator
{
    public static function required($value, string $field): void
    {
        if ($value === null || $value === '') {
            throw new ValidationException("Campo {$field} es obligatorio.");
        }
    }
}