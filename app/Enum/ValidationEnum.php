<?php

namespace App\Enum;

class ValidationEnum
{
    public static function areaPosition()
    {
        return [
            'name' => 'required|string|filled',
            'code' => 'required|string|filled',
            'address' => 'required|string|filled',
            'vehicle_type' => 'required|string',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'address_name' => 'nullable|string'
        ];
    }
}
