<?php

namespace SmartCollectionScore\Client\Model;
use \SmartCollectionScore\Client\ObjectSerializer;

class CatalogoTipoContrato
{
    
    const TC = 'TC';
    const TD = 'TD';
    const CC = 'CC';
    const HB = 'HB';
    const LC = 'LC';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::TC,
            self::TD,
            self::CC,
            self::HB,
            self::LC,
        ];
    }
}
