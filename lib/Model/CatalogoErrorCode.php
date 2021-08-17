<?php

namespace SmartCollectionScore\Client\Model;
use \SmartCollectionScore\Client\ObjectSerializer;

class CatalogoErrorCode
{
    
    const C1 = 'C1';
    const C2 = 'C2';
    const C3 = 'C3';
    const C4 = 'C4';
    const C5 = 'C5';
    const C6 = 'C6';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::C1,
            self::C2,
            self::C3,
            self::C4,
            self::C5,
            self::C6,
        ];
    }
}
