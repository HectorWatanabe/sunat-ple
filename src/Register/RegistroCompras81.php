<?php

namespace SunatPle\Register;

use SunatPle\Common\TxtWriter;
use SunatPle\Field\Periodo;
use SunatPle\Field\Cuo;
use SunatPle\Field\Correlativo;
use SunatPle\Field\FechaEmision;
use SunatPle\Field\FechaVencimiento;
use SunatPle\Field\TipoComprobante;
use SunatPle\Field\Serie;
use SunatPle\Field\NumeroComprobante;
use SunatPle\Field\TipoDocumentoProveedor;
use SunatPle\Field\NumeroDocumentoProveedor;
use SunatPle\Field\RazonSocialProveedor;
use SunatPle\Field\BaseImponible;
use SunatPle\Field\Igv;
use SunatPle\Field\Exonerado;
use SunatPle\Field\OtrosCargos;
use SunatPle\Field\ImporteTotal;
use SunatPle\Field\Divisa;
use SunatPle\Field\TipoCambio;
use SunatPle\Field\FechaDocumentoModifica;
use SunatPle\Field\TipoComprobanteModifica;
use SunatPle\Field\SerieDocumentoModifica;
use SunatPle\Field\NumeroDocumentoModifica;
use SunatPle\Field\FechaDetraccion;
use SunatPle\Field\NumeroDetraccion;
use SunatPle\Field\EstadoOperacion;
use SunatPle\Field\EmptyField;

class RegistroCompras81
{
    public function generate(array $records): string
    {
        $writer = new TxtWriter();

        foreach ($records as $record) {

            $writer->add([
                Periodo::make($record),                     
                Cuo::make($record),                         
                Correlativo::make($record),                 
                FechaEmision::make($record),                
                FechaVencimiento::make($record),            
                TipoComprobante::make($record),             
                Serie::make($record),                       
                EmptyField::make(),                         
                NumeroComprobante::make($record),           
                EmptyField::make(),                         
                TipoDocumentoProveedor::make($record),      
                NumeroDocumentoProveedor::make($record),    
                RazonSocialProveedor::make($record),        
                BaseImponible::make($record),               
                Igv::make($record),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                Exonerado::make($record),                   
                EmptyField::make(),                         
                OtrosCargos::make($record),                 
                ImporteTotal::make($record),                
                Divisa::make($record),                      
                TipoCambio::make($record),                  
                FechaDocumentoModifica::make($record),      
                TipoComprobanteModifica::make($record),     
                SerieDocumentoModifica::make($record),      
                EmptyField::make(),                         
                NumeroDocumentoModifica::make($record),     
                FechaDetraccion::make($record),            
                NumeroDetraccion::make($record),            
                EmptyField::make(),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                EmptyField::make(),                         
                EstadoOperacion::make($record),             
                EmptyField::make(),                         
            ]);
        }

        return $writer->getContent();
    }
}