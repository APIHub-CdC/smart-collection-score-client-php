<?php

namespace SmartCollectionScore\Client\Model;

use \ArrayAccess;
use \SmartCollectionScore\Client\ObjectSerializer;

class Peticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Peticion';
    
    protected static $apihubTypes = [
        'folio_otorgante' => 'string',
        'numero_cuenta' => 'string',
        'tipo_contrato' => '\SmartCollectionScore\Client\Model\CatalogoTipoContrato',
        'tipo_cuenta' => '\SmartCollectionScore\Client\Model\CatalogoTipoCuenta',
        'tipo_frecuencia' => '\SmartCollectionScore\Client\Model\CatalogoTipoFrecuencia',
        'frontera_de_impago' => '\SmartCollectionScore\Client\Model\CatalogoVentanaTiempo',
        'periodos_vencidos' => '\SmartCollectionScore\Client\Model\CatalogoPeriodosVencidos',
        'saldo_vencido' => 'string',
        'saldo_actual' => 'string'
    ];
    
    protected static $apihubFormats = [
        'folio_otorgante' => null,
        'numero_cuenta' => null,
        'tipo_contrato' => null,
        'tipo_cuenta' => null,
        'tipo_frecuencia' => null,
        'frontera_de_impago' => null,
        'periodos_vencidos' => null,
        'saldo_vencido' => null,
        'saldo_actual' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'folio_otorgante' => 'folioOtorgante',
        'numero_cuenta' => 'numeroCuenta',
        'tipo_contrato' => 'tipoContrato',
        'tipo_cuenta' => 'tipoCuenta',
        'tipo_frecuencia' => 'tipoFrecuencia',
        'frontera_de_impago' => 'fronteraDeImpago',
        'periodos_vencidos' => 'periodosVencidos',
        'saldo_vencido' => 'saldoVencido',
        'saldo_actual' => 'saldoActual'
    ];
    
    protected static $setters = [
        'folio_otorgante' => 'setFolioOtorgante',
        'numero_cuenta' => 'setNumeroCuenta',
        'tipo_contrato' => 'setTipoContrato',
        'tipo_cuenta' => 'setTipoCuenta',
        'tipo_frecuencia' => 'setTipoFrecuencia',
        'frontera_de_impago' => 'setFronteraDeImpago',
        'periodos_vencidos' => 'setPeriodosVencidos',
        'saldo_vencido' => 'setSaldoVencido',
        'saldo_actual' => 'setSaldoActual'
    ];
    
    protected static $getters = [
        'folio_otorgante' => 'getFolioOtorgante',
        'numero_cuenta' => 'getNumeroCuenta',
        'tipo_contrato' => 'getTipoContrato',
        'tipo_cuenta' => 'getTipoCuenta',
        'tipo_frecuencia' => 'getTipoFrecuencia',
        'frontera_de_impago' => 'getFronteraDeImpago',
        'periodos_vencidos' => 'getPeriodosVencidos',
        'saldo_vencido' => 'getSaldoVencido',
        'saldo_actual' => 'getSaldoActual'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
        $this->container['numero_cuenta'] = isset($data['numero_cuenta']) ? $data['numero_cuenta'] : null;
        $this->container['tipo_contrato'] = isset($data['tipo_contrato']) ? $data['tipo_contrato'] : null;
        $this->container['tipo_cuenta'] = isset($data['tipo_cuenta']) ? $data['tipo_cuenta'] : null;
        $this->container['tipo_frecuencia'] = isset($data['tipo_frecuencia']) ? $data['tipo_frecuencia'] : null;
        $this->container['frontera_de_impago'] = isset($data['frontera_de_impago']) ? $data['frontera_de_impago'] : null;
        $this->container['periodos_vencidos'] = isset($data['periodos_vencidos']) ? $data['periodos_vencidos'] : null;
        $this->container['saldo_vencido'] = isset($data['saldo_vencido']) ? $data['saldo_vencido'] : null;
        $this->container['saldo_actual'] = isset($data['saldo_actual']) ? $data['saldo_actual'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['folio_otorgante'] === null) {
            $invalidProperties[] = "'folio_otorgante' can't be null";
        }
        if ($this->container['numero_cuenta'] === null) {
            $invalidProperties[] = "'numero_cuenta' can't be null";
        }
        if ($this->container['tipo_contrato'] === null) {
            $invalidProperties[] = "'tipo_contrato' can't be null";
        }
        if ($this->container['tipo_cuenta'] === null) {
            $invalidProperties[] = "'tipo_cuenta' can't be null";
        }
        if ($this->container['tipo_frecuencia'] === null) {
            $invalidProperties[] = "'tipo_frecuencia' can't be null";
        }
        if ($this->container['frontera_de_impago'] === null) {
            $invalidProperties[] = "'frontera_de_impago' can't be null";
        }
        if ($this->container['periodos_vencidos'] === null) {
            $invalidProperties[] = "'periodos_vencidos' can't be null";
        }
        if ($this->container['saldo_vencido'] === null) {
            $invalidProperties[] = "'saldo_vencido' can't be null";
        }
        if ($this->container['saldo_actual'] === null) {
            $invalidProperties[] = "'saldo_actual' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioOtorgante()
    {
        return $this->container['folio_otorgante'];
    }
    
    public function setFolioOtorgante($folio_otorgante)
    {
    
        $this->container['folio_otorgante'] = $folio_otorgante;
        return $this;
    }
    
    public function getNumeroCuenta()
    {
        return $this->container['numero_cuenta'];
    }
    
    public function setNumeroCuenta($numero_cuenta)
    {
        $this->container['numero_cuenta'] = $numero_cuenta;
        return $this;
    }
    
    public function getTipoContrato()
    {
        return $this->container['tipo_contrato'];
    }
    
    public function setTipoContrato($tipo_contrato)
    {
        $this->container['tipo_contrato'] = $tipo_contrato;
        return $this;
    }
    
    public function getTipoCuenta()
    {
        return $this->container['tipo_cuenta'];
    }
    
    public function setTipoCuenta($tipo_cuenta)
    {
        $this->container['tipo_cuenta'] = $tipo_cuenta;
        return $this;
    }
    
    public function getTipoFrecuencia()
    {
        return $this->container['tipo_frecuencia'];
    }
    
    public function setTipoFrecuencia($tipo_frecuencia)
    {
        $this->container['tipo_frecuencia'] = $tipo_frecuencia;
        return $this;
    }
    

    
    public function getFronteraDeImpago()
    {
        return $this->container['frontera_de_impago'];
    }
    
    public function setFronteraDeImpago($frontera_de_impago)
    {
        $this->container['frontera_de_impago'] = $frontera_de_impago;
        return $this;
    }
    
    public function getPeriodosVencidos()
    {
        return $this->container['periodos_vencidos'];
    }
    
    public function setPeriodosVencidos($periodos_vencidos)
    {
        $this->container['periodos_vencidos'] = $periodos_vencidos;
        return $this;
    }
    
    public function getSaldoVencido()
    {
        return $this->container['saldo_vencido'];
    }
    
    public function setSaldoVencido($saldo_vencido)
    {
        $this->container['saldo_vencido'] = $saldo_vencido;
        return $this;
    }
    
    public function getSaldoActual()
    {
        return $this->container['saldo_actual'];
    }
    
    public function setSaldoActual($saldo_actual)
    {
        $this->container['saldo_actual'] = $saldo_actual;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
