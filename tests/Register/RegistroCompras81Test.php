<?php

use PHPUnit\Framework\TestCase;
use SunatPle\Register\RegistroCompras81;
use SunatPle\Tests\Fixtures\Compras81Fixture;

class RegistroCompras81Test extends TestCase
{
    public function testGeneraRegistroCorrectamente()
    {
        $registro = new RegistroCompras81();

        $record = Compras81Fixture::valid();

        $output = $registro->generate([
            $record
        ]);

        $this->assertEquals(
            42,
            substr_count($output, '|')
        );
    }
}