<?php

namespace SunatPle\Contracts;

interface FieldInterface
{
    public static function make(array $record): string;
}