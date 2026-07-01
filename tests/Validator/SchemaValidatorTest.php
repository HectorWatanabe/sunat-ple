<?php

use PHPUnit\Framework\TestCase;
use SunatPle\Exceptions\ValidationException;
use SunatPle\Validator\SchemaValidator;
use SunatPle\Schema\Compras81Schema;
use SunatPle\Tests\Fixtures\Compras81Fixture;

class SchemaValidatorTest extends TestCase
{
    public function testPeriodoObligatorio()
    {
        $this->expectException(ValidationException::class);

        $record = Compras81Fixture::valid();

        unset($record['periodo']);

        SchemaValidator::validate(
            $record,
            Compras81Schema::FIELDS
        );
    }

    public function testFechaInvalida()
    {
        $this->expectException(ValidationException::class);

        $record = Compras81Fixture::valid();

        $record['fecha_emision'] = 'hola';

        SchemaValidator::validate(
            $record,
            Compras81Schema::FIELDS
        );
    }

    public function testNumeroInvalido()
    {
        $this->expectException(ValidationException::class);

        $record = Compras81Fixture::valid();

        $record['igv'] = 'ABC';

        SchemaValidator::validate(
            $record,
            Compras81Schema::FIELDS
        );
    }

    public function testEstadoOperacionInvalido()
    {
        $this->expectException(ValidationException::class);

        $record = Compras81Fixture::valid();

        $record['estado_operacion'] = '15';

        SchemaValidator::validate(
            $record,
            Compras81Schema::FIELDS
        );
    }

    public function testLongitudDivisa()
    {
        $this->expectException(ValidationException::class);

        $record = Compras81Fixture::valid();

        $record['divisa'] = 'SOLES';

        SchemaValidator::validate(
            $record,
            Compras81Schema::FIELDS
        );
    }

    public function testIgvInvalido()
    {
        $this->expectException(ValidationException::class);

        $record = Compras81Fixture::valid();

        $record['igv'] = 'ABC';

        SchemaValidator::validate(
            $record,
            Compras81Schema::FIELDS
        );
    }
}
