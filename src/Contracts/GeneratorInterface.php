<?php

namespace SunatPle\Contracts;

interface GeneratorInterface
{
    public function generate(array $records): string;
}