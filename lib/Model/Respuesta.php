<?php

namespace SmartCollectionScore\Client\Model;

use \ArrayAccess;
use \SmartCollectionScore\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Respuesta';
    
    protected static $apihubTypes = [
        'folio_consulta' => 'string',
        'folio_otorgante' => 'string',
        'score' => 'float',
        'frontera_de_impago' => '\SmartCollectionScore\Client\Model\CatalogoVentanaTiempo',
        'error_code' => '\SmartCollectionScore\Client\Model\CatalogoErrorCode',
        'fecha_de_calculo' => 'string'
    ];
    
    protected static $apihubFormats = [
        'folio_consulta' => null,
        'folio_otorgante' => null,
        'score' => null,
        'frontera_de_impago' => null,
        'error_code' => null,
        'fecha_de_calculo' => null
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
        'folio_consulta' => 'folioConsulta',
        'folio_otorgante' => 'folioOtorgante',
        'score' => 'score',
        'frontera_de_impago' => 'fronteraDeImpago',
        'error_code' => 'errorCode',
        'fecha_de_calculo' => 'fechaDeCalculo'
    ];
    
    protected static $setters = [
        'folio_consulta' => 'setFolioConsulta',
        'folio_otorgante' => 'setFolioOtorgante',
        'score' => 'setScore',
        'frontera_de_impago' => 'setFronteraDeImpago',
        'error_code' => 'setErrorCode',
        'fecha_de_calculo' => 'setFechaDeCalculo'
    ];
    
    protected static $getters = [
        'folio_consulta' => 'getFolioConsulta',
        'folio_otorgante' => 'getFolioOtorgante',
        'score' => 'getScore',
        'frontera_de_impago' => 'getFronteraDeImpago',
        'error_code' => 'getErrorCode',
        'fecha_de_calculo' => 'getFechaDeCalculo'
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
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['frontera_de_impago'] = isset($data['frontera_de_impago']) ? $data['frontera_de_impago'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['fecha_de_calculo'] = isset($data['fecha_de_calculo']) ? $data['fecha_de_calculo'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['folio_consulta'] === null) {
            $invalidProperties[] = "'folio_consulta' can't be null";
        }
        if ($this->container['folio_otorgante'] === null) {
            $invalidProperties[] = "'folio_otorgante' can't be null";
        }
        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
        }
        if ($this->container['frontera_de_impago'] === null) {
            $invalidProperties[] = "'frontera_de_impago' can't be null";
        }
        if ($this->container['fecha_de_calculo'] === null) {
            $invalidProperties[] = "'fecha_de_calculo' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioConsulta()
    {
        return $this->container['folio_consulta'];
    }
    
    public function setFolioConsulta($folio_consulta)
    {
    
        $this->container['folio_consulta'] = $folio_consulta;
        return $this;
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
    
    public function getScore()
    {
        return $this->container['score'];
    }
    
    public function setScore($score)
    {
        $this->container['score'] = $score;
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
    
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }
    
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;
        return $this;
    }
    
    public function getFechaDeCalculo()
    {
        return $this->container['fecha_de_calculo'];
    }
    
    public function setFechaDeCalculo($fecha_de_calculo)
    {
  
        $this->container['fecha_de_calculo'] = $fecha_de_calculo;
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
