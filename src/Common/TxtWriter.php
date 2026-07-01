<?php

namespace SunatPle\Common;

class TxtWriter
{
    private array $lines = [];

    public function add(array $fields): self
    {
        if (count($fields) !== 42) {
            throw new \Exception("Registro inválido: deben ser 42 campos");
        }

        $clean = array_map(fn($v) => trim((string)$v), $fields);

        $this->lines[] = implode('|', $clean) . '|';

        return $this;
    }

    public function getContent(): string
    {
        return implode(PHP_EOL, $this->lines);
    }
}
