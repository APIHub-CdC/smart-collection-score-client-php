<?php

namespace SmartCollectionScore\Client\Model;
use \SmartCollectionScore\Client\ObjectSerializer;

class CatalogoPeriodosVencidos
{
    
    const V = 'V';
    const _1 = '1';
    const _2 = '2';
    const _3 = '3';
    const _84 = '84';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::V,
            self::_1,
            self::_2,
            self::_3,
            self::_84,
        ];
    }
}
