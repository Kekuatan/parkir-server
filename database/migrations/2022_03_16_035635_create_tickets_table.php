<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->softDeletes();
            $table->timestamps();

            $table->unsignedDecimal('total_price');


            $table->string('barcode_no');
            $table->text('picture_vehicle_in');
            $table->text('picture_vehicle_out');
            $table->string('plat_no');

            $table->foreignId('area_position_in_id')->constrained('area_positions');
            $table->foreignId('area_position_out_id')->constrained('area_positions');
            $table->foreignUuid('member_id')->nullable()->constrained('members');
            $table->foreignUuid('voucher_id')->nullable()->constrained('vouchers');
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->foreignId('payment_method_id')->nullable()->constrained('payment_methods');
            $table->foreignUuid('bypasser')->nullable()->constrained('bypassers');
            $table->foreignUuid('user_id')->constrained('users');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
//            $table->string('type'); // voucher, baypass, manual,MEMBER

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
