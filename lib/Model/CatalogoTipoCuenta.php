<?php

namespace SmartCollectionScore\Client\Model;
use \SmartCollectionScore\Client\ObjectSerializer;

class CatalogoTipoCuenta
{
    
    const R = 'R';
    const F = 'F';
    const H = 'H';
    const L = 'L';
    const Q = 'Q';
    const A = 'A';
    const E = 'E';
    const P = 'P';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::R,
            self::F,
            self::H,
            self::L,
            self::Q,
            self::A,
            self::E,
            self::P,
        ];
    }
}
