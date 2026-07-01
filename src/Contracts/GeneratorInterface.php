<?php

namespace SunatPle\Contracts;

interface GeneratorInterface
{
    public function add(array $record): self;

    public function generate(): string;
}