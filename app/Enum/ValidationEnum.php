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

    public static function user()
    {
        return [
            'name' => 'required|string|filled',
            'gander' => 'required|string|filled',
            'phone_number' => 'required|string|filled',
            'address' => 'required|string|filled',
            'password' => 'required|string|filled',
            'email' => 'required|email',
            'tax' => 'nullable|numeric',
            'level' => 'required|string|filled',
            'shift_id' => 'nullable|string'
        ];
    }

    public static function vehicle()
    {
        return [
            'name' => 'required|string|filled',
            'code' => 'required|string|filled',
            'hourly_price' => 'required|string|filled',
            'stay_price' => 'required|string|filled',
            'fine_ticket_price' => 'required|string|filled',
            'member_price' => 'required|string|filled',
            'type' => 'required|string|filled',
        ];
    }

    public static function shift()
    {
        return [
            'code' => 'required|string|filled',
            'description' => 'nullable|string',
            'start_at' => 'required|date_format:H:i',
            'end_at' => 'required|date_format:H:i',
        ];
    }

    public static function paymentMethod()
    {
        return
            [
                'name' => 'required|string|filled',
                'code' => 'required|string|filled',
            ];
    }

    public static function voucher()
    {
        return
            [
                'start_at' => 'required|date_format:d/m/Y H:i:s',
                'end_at' => 'required|date_format:d/m/Y H:i:s',
                'name' => 'required|string|filled',
                'note' => 'nullable|string',
                'plat_no' => 'required|string',
            ];
    }

    public static function parameter()
    {
        return [
            'group' => 'required|string',
            'name' => 'required|string',
            'value' => 'required|string',
        ];
    }

    public static function members()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string|filled',
            'gander' => 'required|string|filled',
            'phone_number' => 'required|string|filled',
            'plat_no' => 'required|string',
            'card_no' => 'required|string',
            'vehicle_id' => 'required|string',
            'group' => 'nullable|string',
            'start_at' => 'required|date_format:d/m/Y H:i:s',
            'end_at' => 'required|date_format:d/m/Y H:i:s',
            'payment_method_id' => 'required|string',
            'in' => 'required|date_format:d/m/Y H:i:s',
            'out' => 'required|date_format:d/m/Y H:i:s',
            'user_id' => 'required|string'
        ];
    }

    public static function ticket()
    {
        return [
            'total_price' => 'nullable|min:0|number',
            'vehicle_id' => 'nullable|string',
            'area_position_in_id' => 'required|string|exists:area_positions,id',
            'area_position_out_id' => 'nullable|string',
            'barcode_no' => 'required|string',
            'picture_vehicle_in' => 'required|string',
            'picture_vehicle_out' => 'nullable|string',
            'user_id' => 'nullable|string',
            'plat_no' => 'required|string',
            'member_id' => 'nullable|string',
            'start_at' => 'required|date_format:d/m/Y H:i:s',
            'end_at' => 'nullable|date_format:d/m/Y H:i:s',
            'voucher_id' => 'nullable|string',
            'payment_method_id' => 'nullable|string',
            'bypasser_id' => 'nullable|string',
        ];
    }

    public static function bypasser()
    {
        return [
            'name' => 'required|string',
            'description' => 'nullable|string',
        ];
    }
}
