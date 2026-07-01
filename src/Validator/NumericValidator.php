<?php

namespace SunatPle\Validator;

use SunatPle\Exceptions\ValidationException;

class NumericValidator
{
    public static function validate($value, string $field): void
    {
        if ($value === null || $value === '') {
            return;
        }

        if (!is_numeric($value)) {
            throw new ValidationException("El campo '{$field}' debe ser numérico.");
        }
    }
}