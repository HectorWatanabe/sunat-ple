<?php

namespace SunatPle\Common;

class TxtWriter
{
    private array $lines = [];

    public function add(array $columns): self
    {
        $this->lines[] = implode('|', $columns) . '|';

        return $this;
    }

    public function generate(): string
    {
        return implode(PHP_EOL, $this->lines);
    }
}