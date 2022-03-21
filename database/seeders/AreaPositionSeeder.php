<?php

namespace Database\Seeders;

use App\Enum\AreaPositionEnum;
use App\Enum\VehicleEnum;
use App\Models\AreaPosition;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class AreaPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = Vehicle::get();
        $seeds = [];
        foreach ($vehicles as $vehicle) {
            $seeds[] = [
                'name' => $vehicle->type == VehicleEnum::TWO_WHEELS ? 'pintu keluar motor' : 'pintu keluar mobil',
                'code' => AreaPositionEnum::PINTU_KELUAR,
                'address' => 'jl. kali sari',
                'address_name' => 'Mall cijantung',
                'vehicle_type' => $vehicle->type,
                'lat' => '00000',
                'lng' => '00000'
            ];

            $seeds[] = [
                'name' => $vehicle->type == VehicleEnum::FOUR_WHEELS ? 'pintu masuk motor' : 'pintu masuk mobil',
                'code' => AreaPositionEnum::PINTU_MASUK,
                'address' => 'jl. kali sari',
                'address_name' => 'Mall cijantung',
                'vehicle_type' => $vehicle->type,
                'lat' => '00000',
                'lng' => '00000'
            ];
        }

        foreach ($seeds as $seed) {
            AreaPosition::create($seed);
        }
    }
}
