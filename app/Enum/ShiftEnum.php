<?php

namespace App\Enum;

class ShiftEnum
{
    const SHIFT_1 = '01';
    const SHIFT_2 = '02';

    public static function getDescription($code){
        switch ($code){
            case self::SHIFT_1;
                return 'shift pagi';
            case self::SHIFT_2;
                return 'shift siang';
            default:
                return '';
        }
    }

    public static function getStartAt($code){
        switch ($code){
            case self::SHIFT_1;
                return '08:00:00';
            case self::SHIFT_2;
                return '20:00:00';
            default:
                return '';
        }
    }

    public static function getEndAt($code){
        switch ($code){
            case self::SHIFT_1;
                return '20:00:00';
            case self::SHIFT_2;
                return '08:00:00';
            default:
                return '';
        }
    }
}
