<?php

namespace SmartCollectionScore\Client\Model;
use \SmartCollectionScore\Client\ObjectSerializer;

class CatalogoVentanaTiempo
{
    
    const _2_S = '2S';
    const _4_S = '4S';
    const _8_S = '8S';
    const _1_M = '1M';
    const _3_M = '3M';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::_2_S,
            self::_4_S,
            self::_8_S,
            self::_1_M,
            self::_3_M,
        ];
    }
}
