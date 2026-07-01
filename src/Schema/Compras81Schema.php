<?php

namespace SunatPle\Schema;

class Compras81Schema
{
    public const FIELDS = [

        'periodo' => [
            Rule::REQUIRED => true,
            Rule::MAX => 7
        ],

        'cuo' => [
            Rule::REQUIRED => true,
            Rule::MAX => 40
        ],

        'fecha_emision' => [
            Rule::REQUIRED => true,
            Rule::TYPE => Rule::DATE
        ],

        'fecha_vencimiento' => [
            Rule::TYPE => Rule::DATE
        ],

        'tipo_comprobante' => [
            Rule::REQUIRED => true,
            Rule::MAX => 2
        ],

        'serie' => [
            Rule::REQUIRED => true,
            Rule::MAX => 20
        ],

        'numero_comprobante' => [
            Rule::REQUIRED => true,
            Rule::MAX => 20
        ],

        'tipo_documento_proveedor' => [
            Rule::REQUIRED => true,
            Rule::MAX => 1
        ],

        'numero_documento_proveedor' => [
            Rule::REQUIRED => true,
            Rule::MAX => 20
        ],

        'razon_social_proveedor' => [
            Rule::REQUIRED => true,
            Rule::MAX => 100
        ],

        'base_imponible' => [
            Rule::TYPE => Rule::NUMERIC
        ],

        'igv' => [
            Rule::TYPE => Rule::NUMERIC
        ],

        'exonerado' => [
            Rule::TYPE => Rule::NUMERIC
        ],

        'otros_cargos' => [
            Rule::TYPE => Rule::NUMERIC
        ],

        'importe_total' => [
            Rule::REQUIRED => true,
            Rule::TYPE => Rule::NUMERIC
        ],

        'divisa' => [
            Rule::REQUIRED => true,
            Rule::MAX => 3
        ],

        'tipo_cambio' => [
            Rule::TYPE => Rule::NUMERIC
        ],

        'estado_operacion' => [
            Rule::REQUIRED => true,
            Rule::ENUM => [
                '0',
                '1',
                '6',
                '7',
                '8',
                '9'
            ]
        ]

    ];
}