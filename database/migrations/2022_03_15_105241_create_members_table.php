<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('gender');
            $table->text('address')->nullable();
            $table->string('plat_no');
            $table->string('card_no');
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->foreignId('payment_method_id')->constrained('vehicles');
            $table->foreignUuid('user_id')->constrained('users');
            $table->string('group');
            $table->date('start_at');
            $table->date('end_at');
            $table->dateTime('in')->nullable();
            $table->dateTime('out')->nullable();
            $table->boolean('stay')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
