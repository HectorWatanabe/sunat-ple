<?php

namespace SunatPle\Validator;

use SunatPle\Exceptions\ValidationException;

class LengthValidator
{
    public static function max(string $value, int $length, string $field): void
    {
        if (mb_strlen($value) > $length) {
            throw new ValidationException(
                "El campo '{$field}' supera la longitud máxima de {$length} caracteres."
            );
        }
    }
}