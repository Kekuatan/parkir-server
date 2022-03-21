<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory, UuidTrait;

    public function member()
    {
        return $this->hasOne(Member::class);
    }

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function bypasser()
    {
        return $this->hasOne(Bypasser::class);
    }

    public function voucher()
    {
        return $this->hasOne(Voucher::class);
    }

    public function paymentMethod()
    {
        return $this->hasOne(PaymentMethod::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
