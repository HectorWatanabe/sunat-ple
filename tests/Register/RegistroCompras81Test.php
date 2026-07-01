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

        $this->assertNotEmpty($output);

        $this->assertStringContainsString('CUO001', $output);

        $this->assertStringContainsString('20123456789', $output);

        $expected = '20260700|CUO001|M1|01/07/2026|10/07/2026|01|F001||123||6|20123456789|EMPRESA DEMO SAC|100.00|18.00|||||0.00||5.00|123.00|PEN|1.000||||||||||||||||1||';

        $this->assertSame($expected, $output);
    }

    public function testGeneraMultiplesRegistros()
    {
        $registro = new RegistroCompras81();

        $data = [
            Compras81Fixture::valid(),
            Compras81Fixture::valid()
        ];

        $output = $registro->generate($data);

        $lines = explode(PHP_EOL, trim($output));

        $this->assertCount(2, $lines);
    }
}
