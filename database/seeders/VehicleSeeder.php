<?php

namespace Database\Seeders;

use App\Enum\VehicleEnum;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            [
                'code' => VehicleEnum::TRUCK,
                'type' => VehicleEnum::FOUR_WHEELS,
                'name' => VehicleEnum::getName(VehicleEnum::TRUCK),
                'hourly_price' => 10000,
                'stay_price' => 20000,
                'fine_ticket_price' => 100000,
                'member_price' => 500000,
            ],
            [
                'code' => VehicleEnum::CAR,
                'type' => VehicleEnum::FOUR_WHEELS,
                'name' => VehicleEnum::getName(VehicleEnum::CAR),
                'hourly_price' => 5000,
                'stay_price' => 10000,
                'fine_ticket_price' => 50000,
                'member_price' => 250000,
            ],
            [
                'code' => VehicleEnum::BIKE,
                'type' => VehicleEnum::TWO_WHEELS,
                'name' => VehicleEnum::getName(VehicleEnum::BIKE),
                'hourly_price' => 2000,
                'stay_price' => 5000,
                'fine_ticket_price' => 25000,
                'member_price' => 100000,
            ],
        ];

        foreach ($seeds as $seed) {
            Vehicle::create($seed);
        }

    }
}
