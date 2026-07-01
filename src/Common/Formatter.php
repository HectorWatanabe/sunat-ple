<?php

namespace SunatPle\Common;

class Formatter
{
    public static function date(?string $date): string
    {
        if (!$date) {
            return '';
        }

        return date('d/m/Y', strtotime($date));
    }

    public static function decimal($value): string
    {
        if ($value === null || $value === '') {
            return '';
        }

        return number_format((float)$value, 2, '.', '');
    }

    public static function empty(): string
    {
        return '';
    }
}