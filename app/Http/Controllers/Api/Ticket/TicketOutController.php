<?php

namespace App\Http\Controllers\Api\Ticket;

use App\Enums\DiskEnum;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TicketOutController extends Controller
{
    public function __invoke(Request $request){
        $validation = [
            //'total_price' => 'nullable|min:0|number',
            'vehicle_id' => 'required|string',
//            'area_position_in_id' => 'required|string|exists:area_positions,id',
            'area_position_out_id' => 'nullable|string',
            'barcode_no' => 'required|string',
            //'picture_vehicle_in' => 'required|string',
            'picture_vehicle_out' => 'nullable|mimes:jpeg,jpg,png,gif,svg|max:2048',
//            'user_id' => 'require|string',
//            'plat_no' => 'required|string',
            'member_card_no' => 'nullable|string', //'member_id' => 'nullable|string',
            //'start_at' => 'required|date_format:d/m/Y H:i:s',
            //'end_at' => 'nullable|date_format:d/m/Y H:i:s',
            //'voucher_id' => 'nullable|string',
            //'payment_method_id' => 'nullable|string',
            //'bypasser_id' => 'nullable|string',
        ];

        $request->validate($validation);
        $path = $request->file('picture_vehicle_out')
            ->store(config('constants.storage_path.picture_vehicle_out'),
                \App\Enum\DiskEnum::PUBLIC);

        $ticket = Ticket::where('barcode_no', '=',$request->barcode_no)->first();
        $vehicle = Vehicle::where('id','=',$request->vehicle_id)->first();


        $hour = Carbon::parseFromLocale($ticket->created_at)->diffInHours(Carbon::now());
        $day = Carbon::parseFromLocale($ticket->created_at)->diffInDays(Carbon::now());
        $pricePerHour = ($hour - ($day * 24)) * $vehicle->hourly_price;
        $pricePerDay = $hour * $vehicle->hourly_price;
        $pricePerDay = $pricePerHour + $pricePerDay;
        $ticket->update([
            'picture_vehicle_out' =>  $path
        ]);

        return response()->json([
            'path' => $path,
            'hour' => $hour,
            'day' => $day,
            'price_hour' =>  number_format($pricePerHour, 0, ",", "."),
            'price_day' => number_format($pricePerDay, 0, ",", "."),
            'total_price' => number_format($pricePerDay, 0, ",", "."),
            'ticket' => $ticket,
            'vehicle' => $vehicle,
        ]);
    }
}
