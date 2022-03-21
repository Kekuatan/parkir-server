<?php

namespace Database\Seeders;

use App\Enum\ShiftEnum;
use App\Models\Shift;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
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
                'code' => ShiftEnum::SHIFT_1,
                'description' => ShiftEnum::getDescription(ShiftEnum::SHIFT_1),
                'start_at' => ShiftEnum::getStartAt(ShiftEnum::SHIFT_1),
                'end_at' => ShiftEnum::getEndAt(ShiftEnum::SHIFT_1)
            ],
            [
                'code' => ShiftEnum::SHIFT_2,
                'description' => ShiftEnum::getDescription(ShiftEnum::SHIFT_2),
                'start_at' => ShiftEnum::getStartAt(ShiftEnum::SHIFT_2),
                'end_at' => ShiftEnum::getEndAt(ShiftEnum::SHIFT_2)
            ]
        ];

        foreach ($seeds as $seed) {
            Shift::create($seed);
        }
    }
}
