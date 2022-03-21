<?php

namespace App\Enum;

class VehicleEnum
{
    const CAR = 'C';
    const BIKE = 'A';
    const TRUCK = 'T';

    const FOUR_WHEELS = '02';
    const TWO_WHEELS = '01';

    public static function getName($code)
    {
        switch ($code) {
            case self::BIKE;
                return 'motor';
            case self::TRUCK;
                return 'truck';
            case self::CAR;
                return 'mobil';
            default:
                return '';
        }
    }

}
