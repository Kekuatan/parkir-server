<?php

namespace Database\Seeders;

use App\Enum\MemberEnum;
use App\Models\Member;
use App\Models\PaymentMethod;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle = Vehicle::first();
        $paymentMethod = PaymentMethod::first();
        $user = User::first();

        Member::create([
        'name' => 'Admin test',
        'email' => 'admin@admin.com',
        'address' => 'Depok',
        'gender' => 'mesin',
        'phone_number' => '000000000',
        'plat_no' => 'AB 1234 CD',
        'card_no' => 'ukghahdsi93r2',
        'vehicle_id' => $vehicle->id,
        'user_id' => $user->id,
        'group' => MemberEnum::GROUP_VIP,
        'start_at' => Carbon::now()->format('Y-m-d'),
        'end_at' => Carbon::now()->addYear(),
        'payment_method_id' => $paymentMethod->id,
        'in' => Carbon::now()->format('Y-m-d H:i:s'),
        'out' => Carbon::now()->addHours(1)->format('Y-m-d H:i:s')
        ]);
    }
}
