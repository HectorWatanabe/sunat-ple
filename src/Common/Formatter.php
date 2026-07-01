<?php

namespace SunatPle\Common;

class Formatter
{
    public static function date(?string $date): string
    {
        if (!$date) return '';

        try {
            $timestamp = strtotime($date);

            if ($timestamp === false) {
                return '';
            }

            return date('d/m/Y', $timestamp);
        } catch (\Throwable $e) {
            return '';
        }
    }

    public static function number($value): string
    {
        if ($value === null || $value === '') {
            return '';
        }

        if (is_string($value)) {
            $value = str_replace(',', '.', $value);
        }

        if (!is_numeric($value)) {
            return '';
        }

        return number_format((float)$value, 2, '.', '');
    }
}
