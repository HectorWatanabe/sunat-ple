<?php

namespace SunatPle\Tests\Fixtures;

class Compras81Fixture
{
    public static function valid(): array
    {
        return [

            'periodo' => '2026-07',

            'cuo' => 'CUO001',

            'correlativo' => 'M1',

            'fecha_emision' => '2026-07-01',

            'fecha_vencimiento' => '2026-07-10',

            'tipo_comprobante' => '01',

            'serie' => 'F001',

            'numero_comprobante' => '123',

            'tipo_documento_proveedor' => '6',

            'numero_documento_proveedor' => '20123456789',

            'razon_social_proveedor' => 'EMPRESA DEMO SAC',

            'base_imponible' => 100.00,

            'igv' => 18.00,

            'exonerado' => 0.00,

            'otros_cargos' => 5.00,

            'importe_total' => 123.00,

            'divisa' => 'PEN',

            'tipo_cambio' => 1.000,

            'fecha_documento_modifica' => null,

            'tipo_comprobante_modifica' => '',

            'serie_documento_modifica' => '',

            'numero_documento_modifica' => '',

            'fecha_detraccion' => null,

            'numero_detraccion' => '',

            'estado_operacion' => '1'

        ];
    }
}
