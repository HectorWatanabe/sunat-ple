<?php

namespace SunatPle\Validator;

use SunatPle\Exceptions\ValidationException;

class EnumValidator
{
    public static function validate($value, array $allowed, string $field): void
    {
        if ($value === null || $value === '') {
            return;
        }

        if (!in_array($value, $allowed, true)) {
            throw new ValidationException(
                "El campo '{$field}' contiene un valor inválido."
            );
        }
    }
}