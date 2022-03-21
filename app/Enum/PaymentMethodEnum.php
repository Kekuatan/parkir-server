<?php

namespace App\Enum;

class PaymentMethodEnum
{
    const CASH = '00';
    const EMONEY = '01';

    public static function getName($code)
    {
        switch ($code) {
            case self::CASH;
                return 'tunai';
            case self::EMONEY;
                return 'emoney';
            default:
                return '';
        }
    }

}
