<?php

namespace SmartCollectionScore\Client\Model;
use \SmartCollectionScore\Client\ObjectSerializer;

class CatalogoErrorCode
{
    
    const E1 = 'E1';
    const E2 = 'E2';
    const E3 = 'E3';
    const E4 = 'E4';
    const E5 = 'E5';
    const E6 = 'E6';
    const E7 = 'E7';
    const E8 = 'E8';
    const E9 = 'E9';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::E1,
            self::E2,
            self::E3,
            self::E4,
            self::E5,
            self::E6,
            self::E7,
            self::E8,
            self::E9,
        ];
    }
}
