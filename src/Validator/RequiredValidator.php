<?php

namespace SunatPle\Validator;

use SunatPle\Exceptions\ValidationException;

class RequiredValidator
{
    public static function validate($value, string $field): void
    {
        if ($value === null || $value === '') {
            throw new ValidationException("El campo '{$field}' es obligatorio.");
        }
    }
}