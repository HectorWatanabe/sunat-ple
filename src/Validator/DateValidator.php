<?php

namespace SunatPle\Validator;

use SunatPle\Exceptions\ValidationException;

class DateValidator
{
    public static function validate($value, string $field): void
    {
        if ($value === null || $value === '') {
            return;
        }

        $date = \DateTime::createFromFormat('Y-m-d', $value);

        if (!$date || $date->format('Y-m-d') !== $value) {
            throw new ValidationException(
                "El campo '{$field}' debe tener formato YYYY-MM-DD."
            );
        }
    }
}