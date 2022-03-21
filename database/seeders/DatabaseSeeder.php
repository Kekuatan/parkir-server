<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(VehicleSeeder::class);
        $this->call(ShiftSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(AreaPositionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MemberSeeder::class);
    }
}
