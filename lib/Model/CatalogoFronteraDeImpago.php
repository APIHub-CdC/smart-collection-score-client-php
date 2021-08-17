<?php

namespace SmartCollectionScore\Client\Model;
use \SmartCollectionScore\Client\ObjectSerializer;

class CatalogoFronteraDeImpago
{
    
    const _15 = 15;
    const _30 = 30;
    const _60 = 60;
    const _90 = 90;
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::_15,
            self::_30,
            self::_60,
            self::_90,
        ];
    }
}
