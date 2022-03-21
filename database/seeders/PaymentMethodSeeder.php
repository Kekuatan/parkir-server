<?php

namespace Database\Seeders;

use App\Enum\PaymentMethodEnum;
use App\Models\PaymentMethod;
use App\Models\Shift;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
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
                'name' => PaymentMethodEnum::getName(PaymentMethodEnum::CASH),
                'code' => PaymentMethodEnum::CASH
            ],
            [
                'name' => PaymentMethodEnum::getName(PaymentMethodEnum::EMONEY),
                'code' => PaymentMethodEnum::EMONEY
            ]
        ];

        foreach ($seeds as $seed) {
            PaymentMethod::create($seed);
        }
    }
}
