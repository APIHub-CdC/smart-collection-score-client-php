<?php

namespace SmartCollectionScore\Client\Model;
use \SmartCollectionScore\Client\ObjectSerializer;

class CatalogoTipoFrecuencia
{
    
    const S = 'S';
    const C = 'C';
    const Q = 'Q';
    const M = 'M';
    const B = 'B';
    const T = 'T';
    const A = 'A';
    const U = 'U';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::S,
            self::C,
            self::Q,
            self::M,
            self::B,
            self::T,
            self::A,
            self::U,
        ];
    }
}
